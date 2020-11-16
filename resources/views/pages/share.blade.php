@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')




<main>
    <div style="margin:0 auto;right:20px;left:20px;">
        <form id="stuff" action="/upload/" method="post" enctype="multipart/form-data">
        @csrf
        <label for="pdname">What is it you're sharing today?</label>
        <input type="text"  id="pdname" name="pdname" placeholder="Insert Product Name" required><br>
        <label for="coltime">Collection By</label>
        <input type="datetime-local" id="coltime" name="colBy" required>
        <!-- <select id=collectinfo name="date" required> -->
        <?php 
        // for($i=1; $i<=31; $i++)
        // {echo "<option value=".$i.">".$i."</option>";}
        ?> 
        <!-- </select>  -->
        <!-- <select name="month" id="month" required>
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
        <select name="year" required> -->
        <?php 
        // for($i=2020; $i<=2022; $i++)
        // {echo "<option value=".$i.">".$i."</option>";}
        ?>
         <!-- </select>  -->
        <!-- <select name="hour" required> -->
        <?php 
        // for($i=00; $i<=24; $i++)
        // {echo "<option value=".$i.">".$i."</option>";}
        ?> 
        <!-- </select> 
        :
        <select name="minute" required> -->
        <?php 
        // for($i=00; $i<=59; $i++)
        // {echo "<option value=".$i.">".$i."</option>";}
        ?> 
        <!-- </select> -->
        <br> At
        <input type="tetx"name="zip" placeholder="Postcode" id="zip" required>
        <input type="tetx" name="loca" placeholder="Collection Point" required> <!--insert map--><br>
        Amount:
        <input name="foodamn" type="radio" id="amnfood"><label for="amnfood" required>Uncountable</label>
        <input name="foodamn" type="radio" id="unamn"><input type="text" name="unamn" id="unamn" pattern=[0-9]{1,}>
        <br>
        <label for="fotoup">Upload a cute shot of your food</label><!--upload image-->
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <!--<input type="button" value="Upload Photo" id="fotoup" onclick=""> <a href="{{url('uploadimg')}}">...</a>  -->
        <br>
        <label for="dscrp">Tell us more about it</label>
        <input style="height:20%;width:30%;overflow:scroll;" id="dscrp" name="dscrp" type="text" placeholder="Anything people should know about ?" required>
        <br>
        
        <input type="submit" name="submitFood" value="POST!!!">
        <!--<input id="preview" type="button" name="prevuFood"  value="PREVIEW!!!" onclick="">-->
        <input type="reset" name="resetshare" value="RESET!!!">
        
        <div id='previewDiv'>&nbsp;</div>
        </form>
        <!--<button name="prevuFood"><a href="{url('preproduct')}">PREVIEW!!!</a></button>-->
    </div> 
</main>
<!-- php cant be null function  -->
@endsection






