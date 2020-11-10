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
            <input type="hidden" id="pid" name="pid" value="{{$pid}}">
            <ul>
            <li>Post_Time: </li>
            <li>PickUp_Time:{{$picktime}}
                <select id=collectinfo name="date" value="{{$days}}" required>
                    <?php 
                    for($i=1; $i<=31; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    <select name="month" id="month" value="{{$months}}" required>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    </select>
                    <select name="year" value="{{$years}}" required>
                    <?php 
                    for($i=2020; $i<=2022; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    <select name="hour" value="{{$hours}}" required>
                    <?php 
                    for($i=00; $i<=24; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    :
                    <select name="minute" value="{{$mins}}" required>
                    <?php 
                    for($i=00; $i<=59; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select><br>
            </li>
            <li>
            PickUp_Place: <input type="tetx"name="zip" id="zip" value="{{$pickzip}}">
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
            <li>Post :by {{$username}}</li>
            <input type="hidden" id="uesrid" name="userid" value="{{$uid}}">
            </ul>
            <hr>
            <h5>  Description</h5>
            
            <input id="dscrp" name="dscrp" type="text" placeholder="write description" value="{{$dscrp}}">
            <br>
            <button><a herf="{{url('mylist')}}"></a></button>
 
            </form>
            </div>
    </div>       
 
</div>
       

@endsection 



