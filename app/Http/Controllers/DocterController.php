<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Notifications\Welcome;
use App\classes\checkDateHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use   PDF;

class DocterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=User::with('examination')->get();

        return view('docter.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'first_name'=>'required|string|min:2|max:100',
            'surname'=>'required|string|min:2|max:100',
            'address'=>'required|string|min:2|max:100',
            'phone'=>'bail|required|string|min:2|max:100|unique:users,phone',
            'email'=>'bail|required|email|unique:users,email',
            'gender'=>'required|in:1,2',
            'speciality'=>'required|string|min:2|max:100',
             
           

        ])->validate();
      
        $dob;
        // check if date is valid
        try {
              $dob=checkDateHelper::check($request->year, $request->month, $request->day);
            
        } catch (\Exception $ex) {

            return Redirect::back()->withErrors(['invalid date of birth'])->withInput();
        }
        DB::beginTransaction();
        $user=new User;
        try{
           
            $user->first_name=$request->first_name;
            $user->surname=$request->surname;
            $user->gender=$request->gender;
            $user->email=$request->email;
            $user->address=$request->address;
            $user->phone=$request->phone;
            $user->DOB=$dob;
            $user->password=Hash::make(str_random(8));
            $user->isAdmin=0;
            $user->active=1;
            $user->speciality=$request->speciality;
            $user->save();
        $token=app('auth.password.broker')->createToken($user);
        
         Notification::send($user, new Welcome($token));
         DB::commit();
         return redirect()->route('doctor.show', $user->id);
         } catch(\Exception $e)
         {
            DB::rollback();
            throw $e;
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=User::with('examination','examination.patient')->findOrfail($id);
        return view('docter.single',compact('doctor'));
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
    public function pdf(){
        $docters=User::all();
        $pdf=PDF::loadView('docter.pdf',compact('docters'));
       
        return $pdf->download("doctors.pdf");
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
}
