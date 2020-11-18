<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
  // public function perview(){
    //  return view('uploadindex',compact(''));}
   //INSERT shave.blade 裡的 #pdname,#collectinfo,.loca,.foodamn,#dscrp
   //products(pname,picktime,pickplace,quantity,description) value('pdname','','loca','foodamn','dscrp')     
   public function index($pid) {
        
      $username = "Guest";
      $randpds =DB::table('products')->where('pstatus','=','showing')->inRandomOrder()->limit(4)->get();
      $userid =DB::table('products')->where('pid', '=', $pid)->value('userid');
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $uid = $user->id;
            $randpds =DB::table('products')->where([['userid','!=',$uid],['pstatus','=','showing']])->inRandomOrder()->limit(4)->get(); 
            $ruid=DB::table('requests')->select('uid')->where([ ['pid','=',$pid],['uid','=',$uid] ])->value('uid');
            if($uid==$userid){
              $rt='4';
            }elseif($ruid!=NULL){
                $rt='1';//'false';
            } else{
                $rt='2';//'ture';
              }                                

          }else{
            $rt='3';  
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
      $username =DB::table('users')->where('id','=',$userid)->value('name');
     
      return view('pages.products', compact('pid','products','username','pname','picktime','pickzip',
                                            'pickplace','quantity','dscrp','filename','userid',
                                            'randpds','postime','rt')); 
      
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
      //DB::insert('insert into products (pname,picktime,pickzip,pickplace,quantity,description,userid) values(?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$userid]);
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid'));
      //return $pname;
    }*/

    public function upload(Request $request){
      
      $pname =$request->input('pdname');
      $picktime=$request->input('coldate').' '.$request->input('coltime');
      //.'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
      $pickzip=$request->input('zip');
      $pickplace=$request->input('loca');
      
      if($request->input('unamn')!= NULL){ //測試
        $amu=$request->input('unamn');
      } else{
        $amu='uncountable';
      }
      $quantity= $amu ;
      //$quantity=$request->input('foodamn');未完成
      $dscrp=$request->input('dscrp');
      $userid=(Auth::user())->id;
      $username=(Auth::user())->name;
      $path = $request->file('fileToUpload')->store('public');
      $filename =basename($path);
      $pstatus='showing';
      DB::insert('insert into products (pname,picktime,pickzip,pickplace,quantity,description,filename,userid,pstatus) values(?,?,?,?,?,?,?,?,?)',
                                       [$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$filename,$userid, $pstatus]);
      $pid=DB::table('products')->where('filename', '=', $filename)->value('pid');
      return view('pages.preproducts',compact('username','pname','picktime','pickzip','pickplace','quantity','dscrp','userid','filename','pid','pstatus'));
    
    }
   

    public function delete($pid){
      $uid = Auth::user('id');
      $products =DB::table('products')->get();
      //echo "Are you going to delete ".$pid ;
      $status=DB::table('requests')->where('uid', '=', $uid)->value('status');
        $r_ps=DB::table('requests')->join('products','requests.pid','=','products.pid')
                                   ->where('requests.uid','=',$uid)
                                   ->select('requests.*', 'products.*')
                                   ->get();
      DB::table('products')->where('pid', '=', $pid)->delete();
     
      // return view('pages.mylist',compact('products','uid','r_ps'));
      return redirect("/mylist/");
    }
    public function editlist($uid,$pid) {
        
      $username = "Guest";
      if (Auth::check()) {
          $user = Auth::user();
          $username = $user->name;
      }
      $products =DB::table('products')->where('pid', '=', $pid)->get();
      $pname =DB::table('products')->where('pid', '=', $pid)->value('pname');
      $picktime =DB::table('products')->where('pid', '=', $pid)->value('picktime');
     // $ptime= explode('-', $picktime);
     // $years=$ptime[0];  $months=$ptime[1];
     // $dayy=$ptime[2];
     // $dayy=explode(' ',$dayy);
     // $days=$dayy[0];
     // $ttime=$dayy[1];
     // $ttime=explode(':',$ttime);
     // $hours=$ttime[0];
     // $mins=$ttime[1];

      $pickzip =DB::table('products')->where('pid', '=', $pid)->value('pickzip');
      $pickplace =DB::table('products')->where('pid', '=', $pid)->value('pickplace');
      $quantity=DB::table('products')->where('pid', '=', $pid)->value('quantity');
      $dscrp =DB::table('products')->where('pid', '=', $pid)->value('description');
      $filename =DB::table('products')->where('pid', '=', $pid)->value('filename');
      $uid =DB::table('products')->where('pid', '=', $pid)->value('userid');
      $username =DB::table('users')->where('id','=',$uid)->value('name');
      
      //return $picktime." <br> " .$year."+" .$month."=".$day." ".$hours.":" .$mins;
      return view('pages.edit', compact('pid','products','username','pname','picktime',
                                        'pickzip','pickplace','quantity','dscrp','username',
                                        'filename','uid'));
      }

      public function edit(Request $request,$pid){
      
        $picktime=$request->input('year').'-'.$request->input('month').'-'.$request->input('date').' '.$request->input('hour').':'.$request->input('minute');
       
        if($request->input('unamn')!= NULL){ 
          $amu=$request->input('unamn');
        } else{
          $amu='uncountable';
        }

        $quantity= $amu ; 
        

        $path = $request->file('fileToUpload');
        if($path==NULL){
         $filename =DB::table('products')->where('pid', '=', $pid)->value('filename');
        } else {
          $path= $path ->store('public');
          $filename =basename($path);
        }
        
        $userid =$request->input('userid');
        $uid =$userid.'_';
       $data =DB::table('products')
                 ->where('pid', '=', $pid)
                 ->update(['pname'=> $request->pdname,
                           'picktime'=>$request->pktime,
                           'pickzip'=>$request->zip,
                           'pickplace'=>$request->loca,
                           'quantity'=>$quantity,
                           'description'=>$request->dscrp,
                           'filename' =>$filename,
                           'userid' =>$userid,
                           'pstatus' =>$request->pstatus
                           ]);
           
        
        //DB::table('products')->where('pid', '=', $pid)->update(['pickplace'=>$pickplace]);
        //DB::Update('insert into products (pname,picktime,pickzip,pickplace,quantity,description,filename,userid) values(?,?,?,?,?,?,?,?)',[$pname,$picktime,$pickzip,$pickplace,$quantity,$dscrp,$filename,$userid]);
       // $request->session()->flash('status2', 'Success!'); //待修改alert
        return redirect("/mylist/$uid$pid");
        //return $
      }
    
}
