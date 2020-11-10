@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
    <div class="container" >
        <div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
            <img src='/storage/{{$filename}}' art="picture" height="300px" width="80%" >
            </div>
        </div>
        <div class="card" style="float: right;height:'300px' ;width:55% ;margin: 0px 1% 2% 1%;">
        <div class="card-body"style="height:30% ;width:55%">
            <h3>{{$pname}}</h3>
            <ul>
                <li>PickUp_Time: {{$picktime}}</li>
                <li>PickUp_Place:{{$pickzip}} - {{$pickplace}}</li>
                <li>Amount:{{$quantity}}</li>
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
    <div>
    <center>
   
    <button name="backshare"><a href="{{url('savefood')}}">back</a></button>
    </center>
    </div>
    
    <!-- <button name="editshare" style="align-self: right;"><a href="/edit/{id}">EDIT!!!</a></button>
    <input type="submit" name="submitFood" value="SHARE!!!">
    <button name="submitFood"><a href="#">SHARE!!!</a></button> -->
    <!--<input type="submit" name="prevuFood" value="cancel"> -->         

@endsection    