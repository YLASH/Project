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
          $uid = $user->id;
      }
      $prodcuts =DB::table('prodcuts')->where('id', '=', $id)->get();
      $pname =DB::table('prodcuts')->where('id', '=', $id)->value('pname');
      $picktime =DB::table('prodcuts')->where('id', '=', $id)->value('picktime');
      $pickzip =DB::table('prodcuts')->where('id', '=', $id)->value('pickzip');
      $pickplace =DB::table('prodcuts')->where('id', '=', $id)->value('pickplace');
      $quantity=DB::table('prodcuts')->where('id', '=', $id)->value('quantity');
      $dscrp =DB::table('prodcuts')->where('id', '=', $id)->value('description');
      $filename =DB::table('prodcuts')->where('id', '=', $id)->value('filename');
      $postime =DB::table('prodcuts')->where('id', '=', $id)->value('created_at');
      $userid =DB::table('prodcuts')->where('id', '=', $id)->value('userid');
      $username =DB::table('users')->where('id','=',$userid)->value('name');
      $randpds =DB::table('prodcuts')->where('userid','!=',$uid)->inRandomOrder()->limit(4)->get();
      return view('pages.products', compact('prodcuts','username','pname','picktime','pickzip','pickplace','quantity','dscrp','uid','filename','userid','randpds','postime'));
      
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
      //DB::insert('insert into prodcuts (pname,picktime,pickzip,pickplace,quantity,description,userid) values(?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$userid]);
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid'));
      //return $pname;
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
      $path = $request->file('fileToUpload')->store('public');
      $filename =basename($path);
      //DB::insert('insert into prodcuts (pname,picktime,pickzip,pickplace,quantity,description,filename,userid) values(?,?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$filename,$userid]);
      //return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid','filename'));
      return $pname. $picktime;
      
    }
   

    public function delete($id){
      $prodcuts =DB::table('prodcuts')->get();
      DB::table('prodcuts')->where('id', '=', $id)->delete();
      return view('pages.mylist',compact('prodcuts'));
    }
    public function editlist($id) {
        
      $username = "Guest";
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
      }
      $prodcuts =DB::table('prodcuts')->get();
      $pname =DB::table('prodcuts')->where('id', '=', $id)->value('pname');
      $picktime =DB::table('prodcuts')->where('id', '=', $id)->value('picktime');
      $pickzip =DB::table('prodcuts')->where('id', '=', $id)->value('pickzip');
      $pickplace =DB::table('prodcuts')->where('id', '=', $id)->value('pickplace');
      $quantity=DB::table('prodcuts')->where('id', '=', $id)->value('quantity');
      $dscrp =DB::table('prodcuts')->where('id', '=', $id)->value('description');
      $uid =DB::table('prodcuts')->where('id', '=', $id)->value('userid');
      $username =DB::table('users')->where('id','=',$uid)->value('name');
      
      return view('pages.edit', compact('prodcuts','username','pname','picktime','pickzip','pickplace','quantity','dscrp','username'));
      }
      public function edit(){
        //update
        //return redirct..
      }
    

    
}
