<?php

namespace App\Http\Controllers;

use PDF;
use App\Patient;
use App\Examination;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exs=Examination::with('doctor','patient')->get();
        return view('examination.list',compact('exs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ex=Examination::with('patient','doctor')->findOrfail($id);
        return view('examination.show',compact('ex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function createPrediction($id){
        $patient=Patient::findOrfail($id);
        return view('examination.create',compact('patient'));
    }
    public function predict($id,Request $request){
        $patient=Patient::findOrfail($id);
        Validator::make($request->all(),[
            
            'cp'=>'required|in:1,2,3,4',
            'trestbps'=>'required|integer',
            'chol'=>'required|integer',
            'fbs'=>'required|boolean',
            'restecg'=>'required|in:0,1,2',
            'thalach'=>'required|integer',
            'slope'=>'required|integer',
            'ca'=>'required|in:0,1,2,3',
            'exang'=>'required|boolean',
            'oldpeak'=>'required|integer|min:0',
            'thal'=>'required|in:3,6,7',
             
           

        ])->validate();
        $heartArray=array("age"=>$patient->DOB->age,
        "sex"=>$patient->gender,
        "cp"=>$request->cp,
        "trestbps"=>$request->trestbps,
        "chol"=>$request->chol,
        "fbs"=>$request->fbs,
        "restecg"=>$request->restecg,
        "slope"=>$request->slope,
        "ca"=>$request->ca,
        "exang"=>$request->exang,
        "oldpeak"=>$request->oldpeak,
        "thal"=>$request->thal,
         "thalach"=>$request->thalach);
         $heart=json_encode($heartArray);
         $headers = [
                        'Content-Type' => 'application/json',
                  ];
                  $client = new Client([
                               'headers' => $headers
                             ]);      

     
      try {
        $res = $client->request('POST', env('prediction'), [
            'body' => $heart,
        ]);
       if($res->getStatusCode()==200){
            $heartArray+=array('prediction'=>boolval($res->getBody()->getContents()),'user_id'=>1,'patient_id'=>1);
            $ex=new Examination;
            $ex->fill($heartArray);
            $ex->save();
            return redirect()->route('examination', $ex->id);
       }else{
        throw new \Exception('error occured');
       }
                     
      } catch (\GuzzleHttp\Exception\ClientException $e) {
        return Redirect::back()->withErrors(($e->getResponse()->getBody()->getContents()))->withInput();
      }catch(\Exception $e){
        return Redirect::back()->withErrors($e->getMessage())->withInput();
      }
      return boolean($res->getResponse()->getBody()->getContents());
    
                      
      
   }
   public function downloadPdf($id){
    $ex=Examination::with('patient','doctor')->findOrfail($id);
       $pdf=PDF::loadView('examination.pdf',compact('ex'));
       $name="report".$ex->id.".pdf";
       return $pdf->download($name);
  
   }
   public function comment($id, Request $request){
       $ex=Examination::findOrfail($id);
       Validator::make($request->all(),[
            
        'comment'=>'required|min:10',
        
        'doctorAnalysis'=>'required|boolean',
        
       

    ])->validate();
    $ex->feedback=$request->comment;
    $ex->doctorAnalysis=$request->doctorAnalysis;
    $ex->save();
    return redirect()->route('examination', $ex->id)->withSuccess('feedback created successfully');;


   }
   public function getcomment($id){
    $ex=Examination::with('patient','doctor')->findOrfail($id);
    return view('examination.comment',compact('ex'));
   }
  
      
   public function dataset(){
         
    $table = Examination::all();
    $filename = "dataset.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('age', 'cp', 'trestbps', 'chol','fbs','restecg','thalach','exang','oldpeak','slope','ca','thal','prediction','doctorAnalysis','feedback','created_at'));

    foreach($table as $row) {
fputcsv($handle, array($row['age'], $row['cp'], $row['trestbps'], $row['chol'], $row['fbs'], $row['restecg'], $row['thalach'], $row['exang'],$row['oldpeak'], $row['slope'],$row['ca'], $row['thal'],$row['prediction'],$row['doctorAnalysis'],$row['feedback'],$row['created_at']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    return Response::download($filename, 'dataset.csv', $headers);


   }
   public function printPDF(){
    $exs=Examination::with('doctor','patient')->get();
    $pdf=PDF::loadView('examination.listPDF',compact('exs'));
   
    return $pdf->download('examinations.pdf');
   }
    
      
    
    
}
