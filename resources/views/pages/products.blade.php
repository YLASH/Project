@extends('layouts.base')

@section('title')
my title
@endsection



@section('content')
<style>
 
  #productimg{
    float: left; height:300px; width:40%;margin: 0px 1% 2% 1%;
  } 

  #pimg {
    height:"200px"; width:"300px"; margin: auto;
  }
  #productdes{
    float: right; height:300px ;width:55% ;margin: 0px 1% 2% 1%;
  }
  #productdes> card-body {
    background-color: darkkhaki ;
  }
</style>
<!-- #productop > .card 
    float: left; height:; width:30%;margin: 0px 1% 2% 1%;
  } <div id="productmain" class="card-body"  > </div>-->
 
    <div id="producttop" class="container" >
        <div id="productimg" class="card"  > 
          
            <img  id="pimg" src="/storage/{{$filename}}" art="picture" height="200px" width="300px"> 
            
        </div>

        <div id="productdes" class="amy-crisp-gradient card" style="background: radial-gradient(#fff,#ffd6d6);">
        <div class="card-body" style="height:30% ;width:80%; background:transparent;" >
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
                                alert("A request has been sent already~~"); 
                                    window.location.href ="/product/{{$pid}}";
                                }
                            </script>
                            @break
                        @case(2)
                        <button onclick="askrequest()">Request</button>
                            <script>
                                function askrequest() {
                                    var ask = prompt("You have requested this item", "Enter minmum and maximum quantity if countable");
                                      if (ask == null)  { 
                                          window.alert('awww you have cancelled the request') 
                                      }else{
                                          window.location.href ="/requested/{{$pid}}?ask="+ask;
                                      }
                                    }
                            </script>         
                            @break
                        @case(3)  
                        <button onclick="askrequestx()">Request</button>
                            <script>
                                function askrequestx() {
                                alert("Please log in to send a request <3"); 
                                    window.location.href ="/register";
                                }
                            </script> 
                            @break
                        @case(4)  
                        <button onclick="askrequslef()">Request</button>
                            <script>
                                function askrequslef() {
                                alert("Redirecting to requests for this item"); 
                                    window.location.href ="/mylist/{{$userid}}_{{$pid}}";
                                }
                            </script> 
                            @break    
                            @default
                            <span>request?</span>
                    @endswitch
                
        </div>
        </div>



    </div>
    
    <div class="container" style="margin-top:5%">  
    <br>
    <br>
    
    <h5>你可能有興趣...</h5>
    <hr>
    @foreach($randpds as $randpd)
        @if($randpd->pstatus == 'showing')  
            <div class="card col-3" style="width:30%;float: left;margin:0,1% ,0, 1%;  padding-bottom:0;">
                    <a href="/product/{{$randpd->pid}}"><img src="/storage/{{$randpd->filename}}" art="picture" height="200px" width="100%" ></a>
                    <p align="right"style="margin:0;"> post-time:{{$randpd->created_at}}</p>
            </div>
        @endif
    @endforeach
    
        
    </div>
@endsection