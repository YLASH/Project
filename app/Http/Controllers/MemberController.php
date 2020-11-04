<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function mylist() {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            $userid =$user->id;
        $prodcuts =DB::table('prodcuts')->where('userid', '=', $userid)->get(); 
        
          
        return view('pages.mylist', compact('username','prodcuts'));
        }
        
        return view('auth.login', compact('username'));
    }
}
