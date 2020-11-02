<?php

namespace App\Http\Controllers;

use App\Models\Prodcuts;
use Illuminate\Http\Request;
use App\Models\UploadedImage;

class UploadImageController extends Controller
{
    public function index() {
        $images = UploadedImage::all();
        $image = Prodcuts::all();
       return view('pages.uploadimage',compact('images','image')) ;
       
        }
    public function upload(Request $request){    //上傳功能
         $path = $request->file('fileToUpload')->store('public');
        Prodcuts::insert(["filename"=>basename($path)]);
        return redirect('uploadimg'); //確認選取完圖片回到 原本資料不會不見
    }  
    //上傳照片  未 完 成!!
        
}
