@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="jumbotron">
  <h1 class="display-4"> Hola, {{$username}} !!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4" >
  <p style="text-align: right;">It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button" style="float: right">Learn more</a>
</div>

<div class="alert alert-success col-3" role="alert" style="float: left; height:200px;">
   <img src='\images\img01.png'>
   <h4 class="alert-heading">Image!!</h4>
  <p>Action ....Aww yeah, you successfully read this important alert message. This example text is ~~..ajil;iadhfu;.</p>
</div>
<div class="alert alert-success col-9" role="alert" style="float: right ;height:200px;">
   <h4 class="alert-heading">Statiatics</h4>
  <p>Good morning. The Nobel Peace Prize goes to the World Food Program. Trump says no to a virtual debate. And the F.B.I. foils a plot to kidnap Michigan’s governor.
  </p>
  <br>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
 </div>    

<div class="alert alert-info col-6" role="alert" style="float: left;height:250px;">
   <h4 class="alert-heading">Corporation</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
<div class="alert alert-info col-6" role="alert" style="float: right ;height:250px;">
   <h4 class="alert-heading">Image2</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
 
</div> 

<div class="alert alert-success" role="alert" height="500px" style="float: right ;">
   <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  <a class="btn btn-light btn-mid" href="#" role="button" style="float: right">Learn more</a>
</div> 

  
<br>
<br>



@endsection

