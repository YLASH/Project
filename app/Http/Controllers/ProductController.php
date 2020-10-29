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
      $quantity=DB::table('prodcuts')->where('id', '=', $id)->value('quantity');
      $dscrp =DB::table('prodcuts')->where('id', '=', $id)->value('description');
      $uid =DB::table('prodcuts')->where('id', '=', $id)->value('userid');
      $username =DB::table('users')->where('id','=',$uid)->value('name');
      
      return view('pages.products', compact('prodcuts','username','pname','picktime','pickzip','pickplace','quantity','dscrp','username'));
      
    }
    public function preview(Request $request){
      $pname =$request->input('pdname');
      $picktime=$request->input('year').'-'.$request->input('month').'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
      $pickzip=$request->input('zip');
      $pickplace=$request->input('loca');
      $quantity=$request->input('foodamn');
      $dscrp=$request->input('dscrp');
      $userid=(Auth::user())->id;
      $username=(Auth::user())->name;
      //DB::insert('insert into prodcuts (pname,picktime,pickazip,pickplace,quantity,description,userid) values(?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$userid]);
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid'));
    }
    public function upload(Request $request){
      $pname =$request->input('pdname');
      $picktime=$request->input('year').'-'.$request->input('month').'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
      $pickzip=$request->input('zip');
      $pickplace=$request->input('loca');
      $quantity=$request->input('foodamn');
      $dscrp=$request->input('dscrp');
      $userid=(Auth::user())->id;
      $username=(Auth::user())->name;
      DB::insert('insert into prodcuts (pname,picktime,pickazip,pickplace,quantity,description,userid) values(?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$userid]);
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid'));
   }
   

    public function delete($id){
      $prodcuts =DB::table('prodcuts')->get();
      DB::table('prodcuts')->where('id', '=', $id)->delete();
      return view('pages.mylist',compact('prodcuts'));
  }

    
}
