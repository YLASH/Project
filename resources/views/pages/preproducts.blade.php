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
        <div class="card-body"style="height:30% ;width:80%">
            <h3>{{$pname}}</h3>
            <P style="text-align:right;">{{$pstatus}}</P>
            <ul>
                <li>Pick Up By: {{$picktime}}</li>
                <li>Pick Up Location: {{$pickzip}} - {{$pickplace}}</li>
                <li>Amount: {{$quantity}}</li>
                <li>Posted by: {{$username}}</li>

            </ul> 
            <hr>
            <h5>  Description</h5>
                <p>{{$dscrp}}
                </p>
                <br>
                <br>
                <center>
                <button name="edit"><a href="/mylist/{{$userid}}_{{$pid}}/edit" style="color: inherit;">EDIT</a></button>
                <button name="backsave"><a href="{{url('savefood')}}" style="color: inherit;">BACK</a></button>
                </center>
        </div>
        </div>
    </div>
   
    
    <!-- <button name="editshare" style="align-self: right;"><a href="/edit/{id}">EDIT!!!</a></button>
    <input type="submit" name="submitFood" value="SHARE!!!">
    <button name="submitFood"><a href="#">SHARE!!!</a></button> -->
    <!--<input type="submit" name="prevuFood" value="cancel"> -->         

@endsection    