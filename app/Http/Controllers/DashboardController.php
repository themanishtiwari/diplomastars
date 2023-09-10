<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;

class DashboardController extends Controller
{

    function update(Request $request){
        if(Session('userid')){
        $user= Student::find(Session('userid'));
        $user->name= $request->name;
        $user->branch= $request->branch;
        $user->email= $request->email;
        $user->college= $request->college;
        $user->job_profile= $request->job_profile;
        $user->company= $request->company;
        $user->achivement= $request->achivement;
        $user->message= $request->message;
        $user->save();
        return redirect('dashboard');
        }
        else{
            return redirect('login');
        }


    }

    function upload(Request $request){
        if(Session('userid')){
            $request->validate([
                'image'=>'required|image|max:1024'
            ]);
        $img= $request->file('image')->move('assets/img/profile');
        $user= Student::find(Session('userid'));
        $user->image= $img;
        $user->save();
        return redirect('dashboard');

        }
        else{
            return redirect('login');
        }


    }


    function removeimg(){
        if(Session('userid')){
        $user= Student::find(Session('userid'));
        $user->image= "";
        $user->save();
        return redirect('dashboard');
        }
        else{
            return redirect('login');
        }

    }

}
