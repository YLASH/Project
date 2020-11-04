<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShareController extends Controller
{
    public function randimg() {
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $uid = $user->id;
        }
        $randpd =DB::table('prodcuts')->where('userid','!=',$uid)->inRandomOrder()->limit(3)->get();
        
        $pid =DB::table('prodcuts')->get('id');
       
        //$num=count($prodcuts);//where('userid','!=',$uid)
        
        /*$count = 0; //目前取得的數字個數
        $lotto =array();
        while ($count < 3) {
            $t = rand(1,$num);//先取得一個候選的隨機數
  	       if (in_array($t, $lotto)) continue ;
  	       $lotto[] = $t;
             $count ++;
        }  
        sort($lotto);
        foreach ($lotto as $nu) {
            echo $nu;
        }*/
            //echo in_array($nu, $filename); 
            return  view('pages.test', compact('randpd'));
            //SELECT * FROM `prodcuts`
            //ORDER BY RAND()
            //LIMIT 5   
              
       
           //return $pid . $prodcuts;
     
        
        
    }
}
