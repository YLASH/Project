<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodcuts;
use App\Models\Requested;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index($pid) { 
        $ask = $_GET["ask"];
        //switch
        //case 1 =($userid == $uid)
        //case 2 =(has== $uid && $pid)
        //case 3 =(has!= $uid && $pid)
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $userid = $user->id;
            $uid =DB::table('prodcuts')->where('id', '=', $pid)->value('userid');
            $pname =DB::table('prodcuts')->where('id', '=', $pid)->value('pname');
            if($userid == $uid){
               $r= 'show who going to request';
            }else{
                $status= 'w';
                $amount= '1';
                $r='you'.$username. 'want to request this'.$pid . $pname. 'for'.$amount.'&'. $status.'rely'.$ask;
                //check request 裡這pid uid 有的話要重複加啊
                DB::insert('insert into requests (pid,amount,uid,status) values(?,?,?,?)',[$pid,$amount,$userid,$status]);
            }
        }
        return view('pages.requested',compact('r'));
      
    }
    public function fun(){
        //Prodcuts::pid ->where('id', '=', $uid)
        //DB::table('requests')->get( $pid);-->你po的有的有那些request
        //你所有的request
        //request->uid對到的pid->詳細資料
    }
}
