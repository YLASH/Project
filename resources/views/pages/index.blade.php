@extends('layouts.base')

@section('title')
my title
@endsection
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@section('content')
<body></body>
<div class="jumbotron" id='indx'>
<h2 class="display" >Ever think of helping our environment a wee bit by eating? </h2>
  <!--<h3 class="lead" style="font-size:30px ; font-weight:bold;"> Hello, {{$username}} </h3>-->
  <img src="\images\food14.png" >
  <img src="\images\food15.png" >
  <img src="\images\food16.png" >
  <img src="\images\food17.png" >
  <img src="\images\food18.png" >
  <img src="\images\food19.png" >
  <img src="\images\food20.png">
 
  <hr class="my-4" >
  <p style="text-align: right;">On here anyone has a chance to be a hero by providing a little to the community </p>
  <a class="btn btn-primary btn-lg" href="{{ url('register') }}" role="button" style="float: right">Join US!!</a>
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
  
  
<div class="alert alert-success col-6" role="alert" style="float: left ;height:200px;background-color:	#FFFFFF;border:none;overflow:auto;">
   <h4 class="alert-heading">Statistics</h4>
   <p>According to World Counts, one third of the food produced on our planet goes straight in to the bins. </p>
  
 </div>  
 <div class="alert alert-success col-3" role="alert" style="float: right ;height:200px;background-color:	#FFFFFF;border:none;">
    <h2><b><iframe title='Tons of food lost or wasted' src='https://www.theworldcounts.com/embed/challenges/101?background_color=white&color=black&font_family=%22Helvetica+Neue%22%2C+Arial%2C+sans-serif&font_size=14' style='border: none; padding:0,0,0,0; align:left;' height='150px' width='350' align='left'></iframe>
    </b></h2>
  
 </div>  

<div class="alert alert-info col-9" role="alert" style="float: left;height:250px;background-color:#E1F1E7;overflow:auto;">
   <h4 class="alert-heading">Be part of us.</h4>
  <p>Join us as a volunteer and save all the lonely food!</p>
  <p class="mb-0">Whenever you want to join, it is never too late to be a food hero.</p>
  
  </div>
<div class="alert alert-info col-3" role="alert" style="float: right ;height:250px;background-color:#E1F1E7;">
   <h4 class="alert-heading">
   <img src='\images\earth2.png' art="picture" height="" width="90%" ><img src="\images\volunteer.png" style="float:bottom;height:30%;" >
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


<div class="alert alert-success col-9" role="alert" height="500px" " width="100%" style="float: right ;background-color:#FFFFFF;height:250px;border:none;overflow:auto;">
  <h4 class="alert-heading">Partners</h4>
  <p>Cat Fish Cafe</p>
  <hr>
  <p class="mb-0" style="overflow:auto;">Throwing everything away should not be your daily routine.
    By donating surplus products of your business, you can help an unimaginable amount of peolpe in need and tell more people about your stories.
  </p>
  <a class="btn btn-light btn-mid" href="{{url('/cooperate')}}" role="button" style="float: right">Learn more</a>
</div> 

  
<br></body>
<br>



@endsection

