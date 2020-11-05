@extends('layouts.base')
@section('title')
my title
@endsection

@section('content')
 <!-- <x-app-layout>
   <x-slot name="header"> 
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> 
    </x-slot> </x-app-layout>-->

    <div class="py-12" style="border: 5px black;">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  style="border: 5px brown;">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"  style="border: 5px blue;">
                
                <x-jet-welcome />
            </div>
        </div>
    </div>

@endsection
