<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    function index(){
        if(!Session::has('userid')){
            return view("frontend/login");
        }
        else{
            return redirect('dashboard');
        }
        
    }
    function login(Request $request){
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );

            $user= Student::where('email','=', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){
                    $request->Session()->put('userid',$user->id);
                    return redirect('dashboard');
                }
                else{
                    return back()->with('error','Incorrect Login Details');
                }
                
            }
            else{
                return back()->with('error','User Does Not Exist');
            }
            //print_r($request->all());
            // $email= $request->input('email');
            // $password=$request->input('password');
        }
            
    function dashboard(){
        $user = array();
        if(Session('userid')){
        $user= Student::find(Session('userid'));
        return view('frontend/dashboard')->with(compact('user'));
        }
        else{
            return redirect('login');
        }
    }

    function logout(){
        if(Session::has('userid')){
            Session::forget('userid');
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }
}
