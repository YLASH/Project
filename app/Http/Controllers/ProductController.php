<?php

namespace App\Http\Controllers;

use App\Models\UploadedImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function perview(){
      $pdname = $_POST["pdname"];
      
      return view('uploadindex',compact(''));
  }
   //INSERT shave.blade 裡的 #pdname,#collectinfo,.loca,.foodamn,#dscrp
   //products(pname,picktime,pickplace,quantity,description) value('pdname','','loca','foodamn','dscrp')     
}
