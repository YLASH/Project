@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
        @if (session('status2'))
            <div class="alert alert-success"> {{ session('status2') }} </div>
        @elseif(session('status1'))
            <div class="alert alert-danger"> {{ session('status1') }} </div>
        @endif
<div>
    <div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
        <form id="stuff" action="/up/{{$pid}}" method="post" enctype="multipart/form-data">
            @csrf
        <img src='/storage/{{$filename}}' art="picture" height="220px" width="80%" ><br>
        <label for="fotoup">Upload a cute shot of your food</label><!--upload image-->
         <input type="file" name="fileToUpload" id="fileToUpload" value="{{$filename}}">
          <!-- <input type="button" value="Upload Photo" id="fotoup" onclick=""> <a href="{{url('uploadimg')}}">...</a>-->
        <br>
        </form>
        </div>
    </div>

    <div class="card" style="float: right;height:30% ;width:55% ;margin: 0px 1% 2% 1%;">
            <div class="card-body"style="height:30% ;width:90%">
            <form id="stuff" action="/up/{{$pid}}" method="post" enctype="multipart/form-data">
            @csrf
            <div >
            <input type="text"  id="pdname" name="pdname" placeholder="Insert Product Name"  value="{{$pname}}"><br>
            <select id=pstatus name="pstatus" required>
                    <option value="show">公開</option>
                    <option value="hide">隱藏</option>
            </select> 
            <input type="hidden" id="pid" name="pid" value="{{$pid}}">
            <ul>
            <li>Posted at: </li>
            <li>Pick up by:
            <input type="text"  id="pktime" name="pktime" placeholder="Insert YYYY/MM/DD hh:mm"  value="{{$picktime}}"><br>
            </li>
            <li>
            Collect at: <input type="tetx"name="zip" id="zip" value="{{$pickzip}}">
                          <input type="tetx" name="loca" placeholder="Collection Point" value="{{$pickplace}}"> <!--insert map--><br>
            </li>
            @if($quantity === 'uncountable')
            <li>
                 Amount:<input name="foodamn" type="radio" id="amnfood" checked><label for="amnfood">Uncountable</label>
                       <input name="foodamn" type="radio" id="unamn"><input name="unamn" type="text" id="unamn" pattern=[0-9]{1,} >
                        <br>
            </li>
            @else
            <li>
                 Amount:<input name="foodamn" type="radio" id="amnfood" ><label for="amnfood">Uncountable</label>
                       <input name="foodamn" type="radio" id="unamn" checked><input name="unamn" type="text" id="unamn" pattern=[0-9]{1,} value="{{$quantity}}">
                        <br>
            </li>
            @endif
            <li>Shared by {{$username}}</li>
            <input type="hidden" id="uesrid" name="userid" value="{{$uid}}">
            </ul>
            <hr>
            <h5>  Description</h5>
            
            <input id="dscrp" name="dscrp" type="text" placeholder="write description" value="{{$dscrp}}">
            <br>
            <input type=submit value="submit">
            
            <button style="color: inherit;"><a href="/mylist/{{$uid}}_{{$pid}}">Back</a></button>
 
            </form>
            </div>
    </div>       
 
</div>
       

@endsection 



