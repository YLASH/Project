@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="jumbotron">
  <h3 class="display-6"> Hello, {{$username}} !!</h3>
  <p class="lead">Find what need to be saved around you!!</p>
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter your zip code" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
     <!--for 產品列表-->
     
     @forelse ($prodcuts as $prodcut)
    <div class="card" style="width:30%; float:left;margin: 0px 1% 2% 1%; padding-bottom:0;">
        <img class="card-img-top"src="/storage/{{$prodcut->filename}}" alt="Card image" height="250px" style="width:100%">
        <p align="right"style="margin:0;">Poat-time:2020-10-28 11a.m.</p>
        <div class="card-body"  style="padding-top:0;">
        <h5 class="card-title" >{{$prodcut->pname}}</h5>
        <div style="width:75%; float:left;margin-top: 0;">
        <p  class="card-text">PickUp_time:{{$prodcut->picktime}} <br>PickUp_Place:{{$prodcut->pickzip}}-{{$prodcut->pickplace}}</p>
        </div>
        <div style="width:20%; float:right;">
        <a class="btn btn-sm" href="/product/{{$prodcut->id}}" role="button" style="float: right"> >>more</a>
        </div> 
        </div>
    </div>
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
