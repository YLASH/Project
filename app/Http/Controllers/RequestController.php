<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodcuts;
use App\Models\Request as ModelsRequest;
use App\Models\Requested;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index($pid) { 
        $ask = $_GET["ask"];
        //switch
        //case 1 =($userid == $uid) 未登入
        //case 2 =(has== $uid && $pid)已登入po rqu同仁
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
                //$r='you'.$username. 'want to request this'.$pid . $pname. 'for'.$amount.'&'. $status.'rely'.$ask;
                //check request 裡這pid uid 有的話要重複加啊
                DB::insert('insert into requests (pid,amount,uid,status) values(?,?,?,?)',[$pid,$amount,$userid,$status]);
                return view('pages.requested');
            }
        }
        
         // return view('pages.requested',compact('st','c','d','req'));
      
    }
    public function showde($uid,$pid){
          
      $username = "Guest";
      $randpds =DB::table('prodcuts')->inRandomOrder()->limit(4)->get();
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
          $uid = $user->id;
          $randpds =DB::table('prodcuts')->where('userid','!=',$uid)->inRandomOrder()->limit(4)->get(); 
      }
      $prodcuts =DB::table('prodcuts')->where('id', '=', $pid)->get();
      $pname =DB::table('prodcuts')->where('id', '=', $pid)->value('pname');
      $picktime =DB::table('prodcuts')->where('id', '=', $pid)->value('picktime');
      $pickzip =DB::table('prodcuts')->where('id', '=', $pid)->value('pickzip');
      $pickplace =DB::table('prodcuts')->where('id', '=', $pid)->value('pickplace');
      $quantity=DB::table('prodcuts')->where('id', '=', $pid)->value('quantity');
      $dscrp =DB::table('prodcuts')->where('id', '=', $pid)->value('description');
      $filename =DB::table('prodcuts')->where('id', '=', $pid)->value('filename');
      $postime =DB::table('prodcuts')->where('id', '=', $pid)->value('created_at');
      $userid =DB::table('prodcuts')->where('id', '=', $pid)->value('userid');
      $username =DB::table('users')->where('id','=',$userid)->value('name');
        //Prodcuts::pid ->where('id', '=', $uid)
        //DB::table('requests')->get( $pid);-->你po的有的有那些request
        //你所有的request
        //request->uid對到的pid->詳細資料
        $rt=DB::table('requests')->where('pid','=',$pid)->get();
        
      return view('pages.gotrequest', compact('pid','prodcuts','username','pname','picktime',
                                              'pickzip','pickplace','quantity','dscrp',
                                              'filename','userid','randpds','postime','rt'));
     
    }
}
