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
                <li>PickUp_Time: {{$picktime}}</li>
                <li>PickUp_Place:{{$pickzip}} - {{$pickplace}}</li>
                <li>Amount:</li>
                <li>Post by: {{$username}}</li>

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
    <button name="editshare"><a href="#">EDIT!!!</a></button>
    <button name="backshare" onclick="history.back()">back</button>
    <button name="submitFood"><a href="#">SHARE!!!</a></button>
    <!--<input type="submit" name="submitFood" value="SHARE!!!"> -->
    <!--<input type="submit" name="prevuFood" value="cancel"> -->         

@endsection    