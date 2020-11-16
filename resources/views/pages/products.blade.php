@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
    <div class="container" >
        <div class="card" style="float: left; height:30%; width:40%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
           
            <img src="/storage/{{$filename}}" art="picture" height="300px" width="80%" >
            </div>
        </div>
        <div class="card" style="float: right;height:30% ;width:55% ;margin: 0px 1% 2% 1%;">
        <div class="card-body"style="height:30% ;width:55%">
            <h3>{{$pname}}</h3>
            <ul>
                <li>Posted at: {{$postime}}</li>
                <li>Pick up by: {{$picktime}}</li>
                <li>Collect at:{{$pickzip}} - {{$pickplace}}</li>
                <li>Amount: {{$quantity}}</li>
                <li>Shared by {{$username}}</li>

            </ul> 
            <hr>
            <h5>  Description</h5>
                <p>{{$dscrp}}
                </p>
                <br>
                <br>
                <button><a href="{{ url('savefood') }}" style="color: inherit;">Back</a></button>

                @switch($rt)
                        @case(1)
                        <button onclick="askrequests()">Request</button>
                            <script>
                                function askrequests() {
                                alert("你要過這個囉~~"); 
                                    window.location.href ="/product/{{$id}}";
                                }
                            </script>
                            @break
                        @case(2)
                        <button onclick="askrequest()">Request</button>
                            <script>
                                function askrequest() {
                                    var ask = prompt("You want to request this food", "enter數量如果可以數");
                                      if (ask == null)  { 
                                          window.alert('awww you have cancelled the request') 
                                      }else{
                                          window.location.href ="/requested/{{$id}}?ask="+ask;
                                      }
                                    }
                            </script>         
                            @break
                        @case(3)  
                        <button onclick="askrequestx()">Request</button>
                            <script>
                                function askrequestx() {
                                alert("Please 登入才能request唷!!!"); 
                                    window.location.href ="/login";
                                }
                            </script> 
                            @break
                        @case(4)  
                        <button onclick="askrequslef()">Request</button>
                            <script>
                                function askrequslef() {
                                alert("確認有誰request嗎?"); 
                                    window.location.href ="/mylist/{{$userid}}_{{$id}}";
                                }
                            </script> 
                            @break    
                            @default
                            <span>request?</span>
                    @endswitch
                <!--@if (Route::has('login'))
                   @auth 
                        @if($rt=='false')
                        <button onclick="askrequests()">Request</button>
                            <script>
                                function askrequests() {
                                alert("你要過這個囉~~"); 
                                    window.location.href ="/product/{{$id}}";
                                }
                            </script>
                        @else
                            <button onclick="askrequest()">Request</button>
                            <script>
                                function askrequest() {
                                    var ask = prompt("You want to request this food", "enter數量如果可以數");
                                    window.location.href ="/requested/{{$id}}?ask="+ask;
                                    }
                            </script>
                            @endif   
                    @else
                    <button onclick="askrequestx()">Request</button>
                    <script>
                        function askrequestx() {
                        alert("Please 登入才能request唷!!!"); 
                            window.location.href ="/login";
                        }
                    </script>
                    @endif
                @endif    
                    -->
        </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:5%">  
    <br>
    <br>
    
    <h5>你可能有興趣...</h5>
    <hr>
    @foreach($randpds as $randpd)
    <div class="card col-3" style="width:30%;float: left;margin:0,1% ,0, 1%;  padding-bottom:0;">
            <a href="/product/{{$randpd->id}}"><img src="/storage/{{$randpd->filename}}" art="picture" height="200px" width="100%" ></a>
            <p align="right"style="margin:0;"> post-time:{{$randpd->created_at}}</p>
        </div>
        @endforeach
    
        
    </div>
    
@endsection