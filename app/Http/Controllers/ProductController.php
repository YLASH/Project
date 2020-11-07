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
      $randpds =DB::table('prodcuts')->inRandomOrder()->limit(4)->get();
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
          $uid = $user->id;
          $randpds =DB::table('prodcuts')->where('userid','!=',$uid)->inRandomOrder()->limit(4)->get(); 
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
      
      return view('pages.products', compact('prodcuts','username','pname','picktime','pickzip','pickplace','quantity','dscrp','filename','userid','randpds','postime'));
      
    }
  /*  public function preview(Request $request){
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
    }*/

    public function upload(Request $request){
      
      $pname =$request->input('pdname');
      $picktime=$request->input('year').'-'.$request->input('month').'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
      $pickzip=$request->input('zip');
      $pickplace=$request->input('loca');
      $quantity=$request->input('foodamn');//未完成
      $dscrp=$request->input('dscrp');
      $userid=(Auth::user())->id;
      $username=(Auth::user())->name;
      $path = $request->file('fileToUpload')->store('public');
      $filename =basename($path);
      DB::insert('insert into prodcuts (pname,picktime,pickzip,pickplace,quantity,description,filename,userid) values(?,?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$filename,$userid]);
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid','filename'));
    }
   

    public function delete($pid){
      $prodcuts =DB::table('prodcuts')->get();
      echo "Are you going to delete ".$pid ;
      DB::table('prodcuts')->where('id', '=', $pid)->delete();
      return view('pages.mylist',compact('prodcuts'));
    }
    public function editlist($pid) {
        
      $username = "Guest";
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
      }
      $prodcuts =DB::table('prodcuts')->where('id', '=', $pid)->get();
      $pname =DB::table('prodcuts')->where('id', '=', $pid)->value('pname');
      $picktime =DB::table('prodcuts')->where('id', '=', $pid)->value('picktime');
      $pickzip =DB::table('prodcuts')->where('id', '=', $pid)->value('pickzip');
      $pickplace =DB::table('prodcuts')->where('id', '=', $pid)->value('pickplace');
      $quantity=DB::table('prodcuts')->where('id', '=', $pid)->value('quantity');
      $dscrp =DB::table('prodcuts')->where('id', '=', $pid)->value('description');
      $filename =DB::table('prodcuts')->where('id', '=', $pid)->value('filename');
      $uid =DB::table('prodcuts')->where('id', '=', $pid)->value('userid');
      $username =DB::table('users')->where('id','=',$uid)->value('name');
      
      return view('pages.edit', compact('pid','prodcuts','username','pname','picktime','pickzip','pickplace','quantity','dscrp','username','filename'));
      }
      public function edit(Request $request){
        $pid =$request->input('pid');
        $pname =$request->input('pdname');
        //$picktime=$request->input('year').'-'.$request->input('month').'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
        $pickzip=$request->input('zip');
        $pickplace=$request->input('loca');
        $quantity=$request->input('foodamn');
        $dscrp=$request->input('dscrp');
        $path = $request->file('fileToUpload')->store('public');
        $filename =basename($path);
        DB::table('prodcuts')->where('id', '=', $pid)->update(['pickplace'=>$pickplace]);
        //DB::Update('insert into prodcuts (pname,picktime,pickzip,pickplace,quantity,description,filename,userid) values(?,?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$filename,$userid]);
        return redirect("/edit/{pid}");
        //return $pid.$pickplace;
      }
    
}
