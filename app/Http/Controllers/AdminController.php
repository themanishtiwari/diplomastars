<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Session;
class AdminController extends Controller
{
    function index(){
        if(!Session::has('adminid')){
            return view("frontend/admin/admin-login");
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

            $user= Admin::where('email','=', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){
                    $request->Session()->put('adminid',$user->id);
                    return redirect('admin-dashboard');
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
        if(Session('adminid')){
        $admin= Admin::find(Session('adminid'));
        $student= Student::all();
        return view('frontend/admin/admin-dashboard')->with(compact('admin','student'));
        }
        else{
            return redirect('admin');
        }
    }

    function logout(){
        if(Session::has('adminid')){
            Session::forget('adminid');
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }

    function change(Request $request){
        if(isset($request->approve)){
            $user= Student::find($request->approve);
            $user->approval="1";
            $user->save();
            return back();

        }
        elseif(isset($request->disapprove)){
            $user= Student::find($request->disapprove);
            $user->approval="0";
            $user->save();
            return back();
        }
        elseif(isset($request->delete)){
            $user= Student::find($request->delete);
            if(!is_null($user)){
                $user->delete();
            }
            return back();

        }
        
    }

}
