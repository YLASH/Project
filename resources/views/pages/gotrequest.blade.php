@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<div class="container" >
        <div class="card" style="float: left; height:30%; width:38%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
           
            <img src="/storage/{{$filename}}" art="picture" height="295px" width="80%" >
            </div>
        </div>
        <div class="card" style="float:left;height:30% ;width:40% ;margin: 0px 0.5% 2% 1%;">
        <div class="card-body"style="height:30% ;width:80%">
            <h3>{{$pname}}</h3>
            <ul>
                <li>Post_Time: {{$postime}}</li>
                <li>PickUp_Time: {{$picktime}}</li>
                <li>PickUp_Place:{{$pickzip}} - {{$pickplace}}</li>
                <li>Amount:{{$quantity}}</li>
                <li>Post :by {{$username}}</li>

            </ul> 
            <hr>
            <h5>  Description</h5>
                <p>{{$dscrp}}
                </p>
                
                <br>
                <button><a href="{{ url('mylist') }}" style="color: inherit;">Back</a></button>
                    
        </div>
        </div>
        <div class="card" style="float: right;height:30% ;width:15% ;margin: 0px 1% 2% 0.5%;" height='30%'>
        who will come to pickup:
        <ul>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
            .
            <li></li>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
           
        </ul>
        </div>
    </div>
    <br>
    <div class="container" style="margin-top:2%">  
   <br>
  <div style="float: left;">
   <h5>Who ask the request...</h5>
   <hr>
   
   {{$ruid}}
   <br>
  
   <input type=hidden value="rid">
   <table>
        <tr>
            @foreach($rts as $rt)
            <td>requester{{$rt->uid}}:name   status={{$rt->status}}     time:{{$rt->created_at}} </td>
            @endforeach
        </tr>
    </table>
   requester_name  
   if(status=w)<button name=status > Requested </button>  <!--onclick comfirm pass/reject update db狀態 -->
   else(status=pass)
   status=reject
   
   {{$r_u}}
   </div>
    
</div>
    



@endsection