<?php

namespace App\Http\Controllers;

use App\Models\Prodcuts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  // public function perview(){
    //  return view('uploadindex',compact(''));}
   //INSERT shave.blade 裡的 #pdname,#collectinfo,.loca,.foodamn,#dscrp
   //products(pname,picktime,pickplace,quantity,description) value('pdname','','loca','foodamn','dscrp')     
   public function index($id) {
        
      $username = "Guest";
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
      }
      $prodcuts =DB::table('prodcuts')->get();
      $pname =DB::table('prodcuts')->where('id', '=', $id)->value('pname');
      $picktime =DB::table('prodcuts')->where('id', '=', $id)->value('picktime');
      $pickzip =DB::table('prodcuts')->where('id', '=', $id)->value('pickazip');
      $pickplace =DB::table('prodcuts')->where('id', '=', $id)->value('pickplace');
      $dscrp =DB::table('prodcuts')->where('id', '=', $id)->value('description');
      $uid =DB::table('prodcuts')->where('id', '=', $id)->value('userid');
      $uname =DB::table('users')->where('id','=',$uid)->value('name');
      
      return view('pages.products', compact('prodcuts','username','pname','picktime','pickzip','pickplace','dscrp','uname'));
      
    }
    public function delete($id){
      $prodcuts =DB::table('prodcuts')->get();
      DB::table('prodcuts')->where('id', '=', $id)->delete();
      return view('pages.mylist',compact('prodcuts'));
  }

    
}
