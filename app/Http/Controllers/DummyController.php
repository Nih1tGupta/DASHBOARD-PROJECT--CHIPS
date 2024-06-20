<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DummyController extends Controller
{
    public function dashboard(){
        if(Auth::user()){
            return view('admin.dashboard');
        }
        return redirect(route('login'))->with('error','You need to login first');
    }


    function stored_data(Request $request){
    
        $data = new Member;
        $data->name= $request->input('name');
        $data->email= $request->input('email'); 
         $data->mobile= $request->input('mobile');
         $data->role= $request->input('role');
         $data->save();
         return redirect(route('detail'));
    }



    function detail(){
        
        $details=Member::all();
        $roles=DB::table('rolemaster')->get();
        return view('admin.detail',compact('details'),compact('roles'));
    }

    function edit($id){

       $data = Member::find($id);
       $roles=DB::table('rolemaster')->get();
        return view('admin.edit',compact('data'),compact('roles')); 
    }
    function edited($id,Request $request){

        $data = Member::find($id);
        $roles=DB::table('rolemaster')->get();
        $data->name= $request->input('name');
         $data->mobile= $request->input('mobile');
         $data->role= $request->input('role');
         $data->save();
        return redirect(route('detail'));
     }
 

}
