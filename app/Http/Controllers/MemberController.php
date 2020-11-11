<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function mylist() {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $userid =$user->id;
        $prodcuts =DB::table('prodcuts')->where('userid', '=', $userid)->orderby('created_at','desc')->get(); 
        
          
        return view('pages.mylist', compact('username','prodcuts','userid'));
        }
        
        return view('auth.login', compact('username'));
    }

    public function request() {
      //onclick request insert requester'uid' , 'pid' into table 
      //sent to poster 
    }
    public function respon(){
        //poster agree or not 
        //update  'status'
    }
    public function urrequest(){
        //DB::table('request')-->where(id = uid)-->get(pid)
        //pid ->fech->'prdcuts'的資料
        //update  'status'
    }
}
