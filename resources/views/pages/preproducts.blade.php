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
                <li>post by: {{$username}}</li>

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
    <input type="submit" name="prevuFood" value="修改">
    <input type="submit" name="prevuFood" value="sure"> 
    <input type="submit" name="prevuFood" value="cancel">          

@endsection    