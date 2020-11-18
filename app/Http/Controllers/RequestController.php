<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
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
            $uid =DB::table('products')->where('pid', '=', $pid)->value('userid');
            $pname =DB::table('products')->where('pid', '=', $pid)->value('pname');

            $ruid=DB::table('requests')->select('uid')
                                       ->where('pid','=',$pid)
                                       ->value('uid');
            
            $status= 'w';
            $amount= '1';
            DB::insert('insert into requests (pid,amount,uid,status) values(?,?,?,?)',[$pid,$amount,$userid,$status]);
            return view('pages.requested');
        }
         // return view('pages.requested',compact('st','c','d','req'));
    }

    public function showde($uid,$pid){
          
      $username = "Guest";
      $randpds =DB::table('products')->inRandomOrder()->limit(4)->get();
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
          $uid = $user->id;
          $randpds =DB::table('products')->where('userid','!=',$uid)->inRandomOrder()->limit(4)->get(); 
      }
      $products =DB::table('products')->where('pid', '=', $pid)->get();
      $pname =DB::table('products')->where('pid', '=', $pid)->value('pname');
      $picktime =DB::table('products')->where('pid', '=', $pid)->value('picktime');
      $pickzip =DB::table('products')->where('pid', '=', $pid)->value('pickzip');
      $pickplace =DB::table('products')->where('pid', '=', $pid)->value('pickplace');
      $quantity=DB::table('products')->where('pid', '=', $pid)->value('quantity');
      $dscrp =DB::table('products')->where('pid', '=', $pid)->value('description');
      $filename =DB::table('products')->where('pid', '=', $pid)->value('filename');
      $postime =DB::table('products')->where('pid', '=', $pid)->value('created_at');
      $userid =DB::table('products')->where('pid', '=', $pid)->value('userid');
      $pstatus =DB::table('products')->where('pid', '=', $pid)->value('pstatus');
      $username =DB::table('users')->where('id','=',$userid)->value('name');
        //products::pid ->where('pid', '=', $uid)
        //DB::table('requests')->get( $pid);-->你po的有的有那些request
        //你所有的request
        //request->uid對到的pid->詳細資料
        $rts=DB::table('requests')->where('pid','=',$pid)->get();
        $ruid=DB::table('requests')->select()
                                 ->where('pid','=',$pid)
                                 ->get();
        $r_us=DB::table('requests')->join('users','requests.uid','=','users.id')
                                          ->where('requests.pid','=',$pid)
                                          ->select('requests.*', 'users.*')
                                          ->get();
        $r_unames=DB::table('requests')->join('users','requests.uid','=','users.id')
                                          ->where([['requests.pid','=',$pid],['requests.status','=','accept']])
                                          ->select('users.name')
                                          ->get();
                      
        
        
      return view('pages.item', compact('uid','pid','products','username','pname','picktime',
                                              'pickzip','pickplace','quantity','dscrp',
                                              'filename','userid','randpds','postime','rts','ruid',
                                              'r_us','r_unames','pstatus'));
     
    }

    public function response(Request $request,$rid){
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $uid = $user->id;
            $uid =  $uid.'_';
        $pid=DB::table('requests')->where('rid','=',$rid)->value('pid');    
        DB::table('requests')
                 ->where('rid', '=', $rid)
                 ->update(['status'=> $request->status]);

        return redirect("/mylist/$uid$pid");
         }
         // return view('pages.item');
      }


}
