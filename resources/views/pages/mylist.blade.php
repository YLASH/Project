@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')


        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#"> Your Items </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"> Your Request </a>
        </li>
        
        </ul>
        <div class="card bg-light text-dark">
            <div class="card-body">
                
               <table width='100%' style="table-layout:fixed;">
                @foreach($prodcuts as $prodcut) 
                   <tr>
                       <td><img src="/storage/{{$prodcut->filename}}"height="50px" width="50px">{{$prodcut->pname}}</td>
                       <td> </td>
                       <td>who sent request</td>
                       <td>user1 , user2 , user3 , ...</td>
                       <td> </td>
                       <td><a href='edit/{{$prodcut->id}}' style="color: inherit;"><center>Edit</center></a></td>
                       <td><a href='/#delete/{{$prodcut->id}}/' style="color: inherit;"><center>Delete</center></a></td>
                    </tr>
               @endforeach 
               </table> 
            </div>
         </div>
        </div>


@endsection