@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<style>
     a {color: inherit;

     }
     
</style>

<div class="container" >
        <div class="card" style="float: left; height:30%; width:38%;margin: 0px 1% 2% 1%;"> 
        <div class="card-body">
           
            <img src="/storage/{{$filename}}" art="picture" height="295px" width="80%" >
            </div>
        </div>
        @if($pstatus=='hidden')
        <div class="card" style="float:left;height:30% ;width:40% ;margin: 0px 0.5% 2% 1%;background-color:#F2F2F2">
        @else
        <div class="card" style="float:left;height:30% ;width:40% ;margin: 0px 0.5% 2% 1%;">
        @endif
        <div class="card-body"style="height:30% ;width:80%">
            <h3>{{$pname}}</h3>
            <ul>
                <li >Status: <b>{{$pstatus}}</b></li>
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
                <button><a href="/mylist/{{$uid}}_{{$pid}}/edit" style="color: inherit;">Edit</a></button>    
                <button><a href="{{ url('mylist') }}" style="color: inherit;">Back</a></button>
        </div>
        </div>
        <div class="card" style="float: right;height:30% ;width:15% ;margin: 0px 1% 2% 0.5%;" height='30%'>
        who will come to pickup:
        <ul>
            @foreach($r_unames as $r_uname)
             <li>{{$r_uname->name}}</li>
            @endforeach

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
   <h5>You have received a request from...</h5>
   <hr>
   
   <br>
   <input type=hidden value="rid">
   <table>
        @foreach($r_us as $r_u)
         @if($r_u->status == 'w')
        <tr class="table-info">
            <td>{{$r_u->name}}</td>
            <td>
                <span class="badge badge-pill badge-warning">
                    <em>Wait  your response </em></span> 
            </td>
            <td>
                <form id="stuff" action="/response/{{$r_u->rid}}/" method="post" enctype="multipart/form-data">
                   @csrf
                <input name="status" type="submit" id="accept" value="accept">
                <input name="status" type="submit" id="reject" value="reject">
                </form>
            </td>
            <td>{{$r_u->rcreated_at}}</td>

        </tr>
         @endif
        @endforeach
   </table>
   <table>    
        @foreach($r_us as $r_u)
         @if($r_u->status != 'w')
         <tr class="table-secondary">
            <td>{{$r_u->name}} </td> 
            <td>
                @if($r_u->status == 'accept')
                <span class="badge badge-pill badge-success">
                    <em>You accept the request!</em></span>
                @else 
                <span class="badge badge-pill badge-dark">
                     <em>You reject the request!</em></span>    
                @endif      
            </td>
            <td><button onclick="edit()">Edit</button>
                
            </td>
            <td>{{$r_u->rcreated_at}}</td>

        </tr>
         @endif
        @endforeach
    </table>
   
   </div>
    
</div>
    



@endsection