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
            $uid =$user->id;
        $products =DB::table('products')->where('userid', '=', $uid)->orderby('created_at','desc')->get(); 
        //$r_p =DB::table('requests')->where('uid', '=', $userid)->get();
        $status=DB::table('requests')->where('uid', '=', $uid)->value('status');
        $r_ps=DB::table('requests')->join('products','requests.pid','=','products.pid')
                                   ->where('requests.uid','=',$uid)
                                   ->orderby('created_at','desc')
                                   ->select('requests.*', 'products.*')
                                   ->get();
        return view('pages.mylist', compact('username','products','uid','status','r_ps'));
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
