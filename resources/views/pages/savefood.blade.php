@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="jumbotron" style="background-color:	#C9DECF;">
  <h3 class="display-6"> Hello, {{$username}} !!</h3>
  <p class="lead">Find what need to be saved around you!!</p>
  <p></p>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter your postcode" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <!--<iframe width="300" height="225" frameborder="0" style="border:0; float:right; " src="https://www.google.com/maps/embed/v1/view?zoom=10&center=22.6351%2C120.3355&key=AIzaSyA1vIgshSL0IKqJbIZf2ZPQEetUIMLgiFY" allowfullscreen></iframe>-->
    
</div>
     <!--for 產品列表-->
     
     @forelse ($products as $product)
        @if($product->pstatus == 'showing')
        <div class="card" style="width:30%; float:left;margin: 0px 1% 2% 1%; padding-bottom:0;">
        <a class="btn btn-sm" href="/product/{{$product->pid}}"><img class="card-img-top"src="/storage/{{$product->filename}}" alt="Card image" height="250px" style="width:100%"></a>
            <p align="right"style="margin:0;">Posted-time: {{$product->created_at}}</p>
            <div class="card-body"  style="padding-top:0;">
            <h5 class="card-title" >{{$product->pname}}</h5>
            <div style="width:75%; float:left;margin-top: 0;">
            <p  class="card-text">Pick up by: {{$product->picktime}} <br>Collect at: {{$product->pickzip}}-{{$product->pickplace}}</p>
            </div>
            <div style="width:20%; float:right;">
            <a class="btn btn-sm" href="/product/{{$product->pid}}" role="button" style="float: right"> >>more</a>
            </div> 
            </div>
        </div>
        @endif
    @empty
    <p>empty</p>
    @endforelse
    
     <!--for 產品列表
    <div class="card" style="width:30%; float:left;margin: 0px 1% 2% 1%;">
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">222 領取時間:picktime Some example text some example text. John Doe is an architect and engineer</p>
        <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>-->
   

@endsection
