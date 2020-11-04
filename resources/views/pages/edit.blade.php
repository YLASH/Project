@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<div>
    <div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
        <img src='/storage/{{$filename}}' art="picture" height="100%" width="" ><br>
        <label for="fotoup">Upload a cute shot of your food</label><!--upload image-->
        <input type="file" name="fileToUpload" id="fileToUpload">
            <!--<input type="button" value="Upload Photo" id="fotoup" onclick=""> <a href="{{url('uploadimg')}}">...</a>  -->
        <br>
        </div>
    </div>

    <div class="card" style="float: right;height:30% ;width:55% ;margin: 0px 1% 2% 1%;">
            <div class="card-body"style="height:30% ;width:90%">
            <form id="stuff" action="/upload/" method="post" enctype="multipart/form-data">
            @csrf
            <div >
            <input type="text"  id="pdname" name="pdname" placeholder="Insert Product Name"  value="{{$pname}}"><br>
            <ul>
            <li>Post_Time: </li>
            <li>PickUp_Time:
                <select id=collectinfo name="date" required>
                    <?php 
                    for($i=1; $i<=31; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    <select name="month" id="month" required>
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
                    <select name="year" required>
                    <?php 
                    for($i=2020; $i<=2022; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    <select name="hour" required>
                    <?php 
                    for($i=00; $i<=24; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select> 
                    :
                    <select name="minute" required>
                    <?php 
                    for($i=00; $i<=59; $i++)
                    {echo "<option value=".$i.">".$i."</option>";}
                    ?> </select><br>
            </li>
            <li>
            PickUp_Place: <input type="tetx"name="zip" id="zip" value="{{$pickzip}}">
                          <input type="tetx" name="loca" placeholder="Collection Point" value="{{$pickplace}}"> <!--insert map--><br>
            </li>
            <li> 
                Amount:<input name="foodamn" type="radio" id="amnfood"><label for="amnfood">Uncountable</label>
                       <input name="foodamn" type="radio" id="unamn"><input type="text" id="unamn" pattern=[0-9]{1,}>
                        <br>
            </li>
            <li>Post :by {{$username}}</li>
            </ul>
            <hr>
            <h5>  Description</h5>
            <br>
            <label for="dscrp">Tell us more about it</label>
            <input id="dscrp" name="dscrp" type="text" placeholder="write description">
            <br>

            </form>
            </div>
    </div>       
 
</div>

@endsection 



