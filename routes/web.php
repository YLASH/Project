<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\RequestController;

//use App\Http\Controllers\ShareController;

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
 $username = "Guest";
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
Route::get('/cooperate', [NewController::class, 'coop']);

Route::get('/mylist/', [MemberController::class, 'mylist']);

Route::get('/product/{pid}', [ProductController::class, 'index']);

//Route::post('/preview', [ProductController::class, 'preview']);The GET method is not supported for this route. Supported methods: POST.?!
//get 沒有request到東西
Route::post('/upload', [ProductController::class, 'upload']);


Route::get('/delete/{pid}/', [ProductController::class, 'delete']);
//Route::get('/edit/{pid}/',[ProductController::class, 'editlist']);
Route::post('/up/{pid}',[ProductController::class, 'edit']);

Route::get('/requested/{pid}/',[RequestController::class, 'index']);
Route::post('/response/{rid}/',[RequestController::class, 'response']);
Route::get('/mylist/{uid}_{pid}/',[RequestController::class, 'showde']);
Route::get('/mylist/{uid}_{pid}/edit/',[ProductController::class, 'editlist']);


Route::get('/shows/',[ShareController::class, 'show']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
