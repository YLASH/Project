<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShareController extends Controller
{
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
}
