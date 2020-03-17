<?php

namespace App\Http\Controllers;

use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\classes\checkDateHelper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PDF;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients=Patient::with('examination')->get();

        return view('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('patient.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        Validator::make($request->all(),[
            'first_name'=>'required|string|min:2|max:100',
            'surname'=>'required|string|min:2|max:100',
            'address'=>'required|string|min:2|max:100',
            'phone'=>'bail|required|string|min:2|max:100,phone',
            'email'=>'bail|required|email|unique:patients,email',
            'gender'=>'required|in:1,2',
             
           

        ])->validate();
      
        $dob;
        // check if date is valid
        try {
              $dob=checkDateHelper::check($request->year, $request->month, $request->day);
            
        } catch (\Exception $ex) {

            return Redirect::back()->withErrors(['invalid date of birth'])->withInput();
        }
        $patient=new Patient;
        $patient->first_name=$request->first_name;
        $patient->surname=$request->surname;
        $patient->gender=$request->gender;
        $patient->email=$request->email;
        $patient->address=$request->address;
        $patient->phone=$request->phone;
        $patient->DOB=$dob;
        $patient->save();
         return redirect()->route('patient.show', $patient->id);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient=Patient::with('examination','examination.doctor')->findOrfail($id);
        return view('patient.single',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }
    public function pdf(){
        $docters=Patient::all();
        $pdf=PDF::loadView('patient.pdf',compact('docters'));
       
        return $pdf->download("patients.pdf");
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
    public function searchID(Request $request){
        Validator::make($request->all(),[
            'id'=>'required',

        ])->validate();
        $patient=Patient::find($request->id);
        if($patient){
            return redirect()->route('patient.show', $patient->id);
        }else{
            return redirect()->back()->withErrors("Sorry - we're unable to find a patient with this information. Please check that the information is correct and try again.")->withInput();
        }


    }
    public function searchByNames(Request $request){
        Validator::make($request->all(),[
           
            'surname'=>'required',
            'first_name'=>'required',
            'phone'=>'required',

        ])->validate();
        $patient=Patient::where('surname','=',$request->surname)->where('first_name',$request->first_name)->where('phone',$request->phone)->first();
        if($patient){
            
            return redirect()->route('patient.show', $patient->id);
        }else{
            return redirect()->back()->withErrors("Sorry - we're unable to find a patient with this information. Please check that the information is correct and try again.")->withInput();
        }

    }
}
