@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')

<div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
  <div class="card-body">
      <img src='\images\img01.jpg' art="picture" height="30%" width="40%" >
    </div>
</div>
<div class="card" style="float: right;height:30% ;width:55% ;margin: 0px 1% 2% 1%;">
  <div class="card-body">
    <h3>Product name</h3>
    <ul>
        <li>領取時間:</li>
        <li>領取地點:</li>
        <li>Milk</li>
    </ul> 
    <hr>
    <h5>  Description</h5>
    <ul>
        <li>領取時間:</li>
        <p>Netherlands-based logo designer Sander has come up with an interesting project that features typographic logos (or wordmarks as he prefers to call them) of common words we use every day. He uses the negative space between the letters to create objects that visually represent the meanings of the words. For example, the design of the word SHARP consists of …</p>
    </ul> 
  
  </div>
  
</div>
<div class="card" style="height:30% ;width:98%; margin: 0px 1% 2% 1%;">
  <div class="card-body">Basic card</div>
</div>

@endsection