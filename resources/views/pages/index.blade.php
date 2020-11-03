@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="jumbotron" style="background-color:	#C9DECF;">
  <h1 class="display-4"> Hello, {{$username}} </h1>
  <img src="\images\food14.png" width="50">
  <img src="\images\food15.png" width="50">
  <img src="\images\food16.png" width="50">
  <img src="\images\food17.png" width="50">
  <img src="\images\food18.png" width="50">
  <img src="\images\food19.png" width="50">
  <img src="\images\food20.png" width="50">
  <p class="lead">Do you ever think to make a little bit change to help our environment? </p>
  <hr class="my-4" >
  <p style="text-align: right;">This website allows any one who is willing to 
  provide little power helping the environment to have a chance being a food hero.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button" style="float: right">Learn more</a>
</div>

<!-- <div class="alert alert-success col-3" role="alert" style="float: left; height:200px; background-color:	#FBFBFF;">
   <h4 class="alert-heading">
   <img src='\images\waste3.png' art="picture" height="" width="100%" ></h4>
   <p> </p>
</div> -->

   <div id="carouselExampleIndicators" class=" alert alert-info carousel slide col-3" data-ride="carousel" style="float: left; height:200px;background-color:#FFFFFF;border:none;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\images\waste1.png" alt="" height="80%" width="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\images\waste2.png" alt="" alt="" height="80%" width="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\images\waste3.png" alt="" alt="" height="80%" width="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  
<div class="alert alert-success col-9" role="alert" style="float: right ;height:200px;background-color:	#FFFFFF;border:none;">
   <h4 class="alert-heading">Statistics</h4>
   <p>Based on the waste information from World Counts, there is a third of the world's food is wasted. </p>
  <p><iframe title='Tons of food lost or wasted' src='https://www.theworldcounts.com/embed/challenges/101?background_color=#FBFBFF&color=black&font_family=%22Helvetica+Neue%22%2C+Arial%2C+sans-serif&font_size=14' style='border:none;' height='100' width='300' align='left' ></iframe>
  </p>
  <br>
  <p class="mb-0"></p>
 </div>    

<div class="alert alert-info col-9" role="alert" style="float: left;height:250px;background-color:#E1F1E7;">
   <h4 class="alert-heading">Be part of us.</h4>
  <p>Join us to be a volunteer and save food!</p>
  <p class="mb-0">Whenever you want to join, it is never too late to be a food hero.</p>
  <img src="\images\volunteer.png" style="float:bottom;height:130px;" >
  </div>
<div class="alert alert-info col-3" role="alert" style="float: right ;height:250px;background-color:#E1F1E7;">
   <h4 class="alert-heading">
   <img src='\images\earth2.png' art="picture" height="" width="90%" style="" >
  </h4>
</div> 

<!-- <div class="alert alert-info col-3 d-flex align-item-center" role="alert" style="float: left;height:250px;
background-color:#D7FFEE;">
  <img src='\images\food2.jpg' art="picture" height="80%" width="100%" class="d-flex align-content-center" >
</div> -->


<div id="carouselExampleIndicators" class=" alert alert-info carousel slide col-3" data-ride="carousel" style="float: left; height:250px;background-color:#FFFFFF;border:none;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\images\food2.jpg" alt="" height="80%" width="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\images\food9.jpg" alt="" alt="" height="80%" width="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\images\food10.jpg" alt="" alt="" height="80%" width="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="alert alert-success col-9" role="alert" height="500px" " width="100%" style="float: right ;background-color:#FFFFFF;height:250px;border:none;">
  <h4 class="alert-heading">Cooperative Store</h4>
  <p>H2O Hotel</p>
  <hr>
  <p class="mb-0">Wasting food is never the only choice you can make after closing the store every day.
    Providing food which is near expiration time for free can help unimaginable amount of peolpe and simultaneosly advertise.
  </p>
  <a class="btn btn-light btn-mid" href="#" role="button" style="float: right">Learn more</a>
</div> 

  
<br>
<br>



@endsection

