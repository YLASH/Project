<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index() {
        
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        
        return view('pages.index', compact('username'));
    }
    public function savefood() {
        
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        
        return view('pages.savefood', compact('username'));
    }
    public function share() {
        
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        return view('pages.share', compact('username'));
        }
        
        return view('auth.login', compact('username'));
    }
    public function aboutus() {
        return view('pages.aboutus');
    }
    public function contactus() {
        return view('pages.contactus');
    }
    public function volunteers() {
        return view('pages.volunteers');
    }







    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
