<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UploadedImage;
use phpDocumentor\Reflection\Location;

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
        $prodcuts =DB::table('prodcuts')->orderby('created_at','desc')->get();
        $pid =DB::table('prodcuts')->value('id');
        $pname =DB::table('prodcuts')->value('pname');
        $picktime =DB::table('prodcuts')->value('picktime');
        $pickzip =DB::table('prodcuts')->value('pickzip');
        $pickplace =DB::table('prodcuts')->value('pickplace');
        $filename =DB::table('prodcuts')->value('filename');
        $postime =DB::table('prodcuts')->value('created_at');
        //$images = UploadedImage::all();
        return view('pages.savefood', compact('prodcuts','pid','username','pname','picktime','pickzip','pickplace','postime'));
        
    }
    public function share() {
        
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        return view('pages.share', compact('username'));
        }
        // return header('Location: auth.login?redirect=pages.share');
        return view('auth.login', compact('username'));
        // ? $this->redirectTo : '/share';
    }
    public function aboutus() {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        return view('pages.aboutus',compact('username'));
    }
    public function contactus() {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        return view('pages.contactus',compact('username'));
    }
    public function volunteers() {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        return view('pages.volunteers');
    }
    public function coop() {
        
        /*$username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;, compact('username')
        }*/
        
        return view('pages.cooperate');
    }
    public function main() {
        
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        
        return view('pages.menu', compact('username'));
    }







    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
