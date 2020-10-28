@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
    <div class="container" >
        <div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
            <img src='\images\img02.jpg' art="picture" height="" width="80%" >
            </div>
        </div>
        <div class="card" style="float: right;height:30% ;width:55% ;margin: 0px 1% 2% 1%;">
        <div class="card-body"style="height:30% ;width:55%">
            <h3>{{$pname}}</h3>
            <ul>
                <li>領取時間: {{$picktime}}</li>
                <li>領取地點:{{$pickzip}} - {{$pickplace}}</li>
                <li>數量:</li>
                <li>post :by {{$uname}}</li>

            </ul> 
            <hr>
            <h5>  Description</h5>
                <p>{{$dscrp}}
                </p>
                <br>
                <br>
        </div>
        </div>
    </div>
 
<div class="container" style="margin-top:5%">  
   <br>
   <br>
   
   <h5>你可能有興趣...</h5>
   <hr>
   <div class="card col-3" style="width:30%;float: left;margin:0,1% ,0, 1%;  padding-bottom:0;">
        <img class="card-img-top" src="images/#" alt="Card image" style="width:100%">
        <p align="right"style="margin:0;">post-time:12020-10-28 11a.m.</p>
    </div>
     <!--for 產品列表-->
     <div class="card col-3" style="width:30%;float: left;margin:0,1% ,0, 1%;padding-bottom:0;">
        <img class="card-img-top" src="images/#" alt="Card image" style="width:100%">
        <p align="right"style="margin:0;">post-time:22020-10-28 11a.m.</p>
    </div>
    <div class="card col-3" style="width:30%; margin:0,1% ,0, 1%; padding-bottom:0;">
        <img class="card-img-top" src="images/#" alt="Card image" style="width:100%">
        <p align="right"style="margin:0;">post-time:32020-10-28 11a.m.</p>
    </div>
    
</div>
    
@endsection