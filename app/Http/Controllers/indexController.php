<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class indexController extends Controller
{
    function insert(Request $request){
        $request->validate(
            [
                'name'=>'required|regex:/^[a-zA-Z ]+$/u|max:50',
                'email'=>'required|email|unique:student',
                'branch'=>'required|max:50',
                'password'=>'required'
            ]
            );


        //print_r($request->all());
        $student= new Student;
        $student->name= $request->name;
        $student->branch= $request->branch;
        $student->email= $request->email;
        $student->password = Hash::make($request->password);
        $student->save();

        $user= Student::where('email','=', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){
                    $request->Session()->put('userid',$user->id);
                    return redirect('dashboard');
                }                
            }
            return redirect('/');
        
    }

    function view(){
        $data= Student::where('approval', 1)->get();
        return view('frontend/index')->with(compact('data'));
    }

    function details(Request $request){
        $request->validate(['id'=>'required|max:3' ]);
        $details=Student::find($request->id);
        return view('frontend/details')->with(compact('details'));
    }
}
