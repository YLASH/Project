<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|$username = "Guest";
if (Auth::check()) {
    $user = Auth::user();
    $username = $user->name;
}
*/
if (Auth::check()) {
    $user = Auth::user();
    $username = $user->name;
}
Route::get('/', [NewController::class, 'index']);
Route::get('/logout/', [NewController::class, 'logout']);
Route::get('/savefood/', [NewController::class, 'savefood']);
Route::get('/share/', [NewController::class, 'share']);
Route::get('/aboutus/', [NewController::class, 'aboutus']);
Route::get('/contactus', [NewController::class, 'contactus']);
Route::get('/volunteers', [NewController::class, 'volunteers']);

Route::get('/mylist/', [MemberController::class, 'mylist']);


Route::get('/upload_page/', [ProductController::class, 'upload']);
Route::get('/products/',function(){
    return view('pages.products');
    });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
