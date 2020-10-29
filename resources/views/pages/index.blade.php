@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="jumbotron" style="background-color:	#E8FFF5;">
  <h1 class="display-4"> Hello, {{$username}} </h1>
  <p class="lead">Do you ever think to make a little bit change to help our environment? </p>
  <hr class="my-4" >
  <p style="text-align: right;">This website allows any one who is willing to 
  provide little power helping the environment to have a chance being a food hero.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button" style="float: right">Learn more</a>
</div>

<div class="alert alert-success col-3" role="alert" style="float: left; height:200px; background-color:	#FBFBFF;">
   <h4 class="alert-heading">
   <img src='\images\waste3.png' art="picture" height="" width="100%" ></h4>
  <p> </p>
</div>
<div class="alert alert-success col-9" role="alert" style="float: right ;height:200px;background-color:	#FBFBFF;">
   <h4 class="alert-heading">Statistics</h4>
  <p>根據聯合國報告，全球被浪費掉的1/3食物讓碳排量高達44萬噸
  </p>
  <br>
  <p class="mb-0"></p>
 </div>    

<div class="alert alert-info col-9" role="alert" style="float: left;height:250px;">
   <h4 class="alert-heading">Corporation</h4>
  <p>Join us to be a volunteer and save food!</p>
  <p class="mb-0">Whenever you want to join, it is never too late to be a food hero.</p>
  </div>
<div class="alert alert-info col-3" role="alert" style="float: right ;height:250px;">
   <h4 class="alert-heading">
   <img src='\images\earth2.png' art="picture" height="" width="90%" style="" >
  </h4>
  
 
</div> 

<div class="alert alert-success" role="alert" height="500px" style="float: right ;">
   <h4 class="alert-heading">
Cooperative Store</h4>
  <p>H2O Hotel</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  <a class="btn btn-light btn-mid" href="#" role="button" style="float: right">Learn more</a>
</div> 

  
<br>
<br>



@endsection

