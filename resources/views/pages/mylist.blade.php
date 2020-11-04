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
                
               <table>
                @foreach($prodcuts as $prodcut) 
                   <tr>
                       <td><img src="/storage/{{$prodcut->filename}}"height="50px" width="50px">{{$prodcut->pname}}</td>
                       <td><a href='edit/{{$prodcut->id}}'><center>Edit</center></a></td>
                       <td><a href='#/delete/{{$prodcut->id}}/'><center>Delete</center></a></td>
                    </tr>
               @endforeach 
               </table> 
            </div>
         </div>
        </div>


@endsection