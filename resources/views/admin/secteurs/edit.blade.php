@extends('layouts.adminDefault')
    
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-withe">
            <a class="navbar-brand" href="#">
                <div style="background-color: #c22eee ; width:40px; height:35px; border: 1px solid white; ">
                    <center>
                        <svg style="margin-top:8px; color:white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                    </center>
                </div> 
            </a>
            <a class="navbar-brand" href="/secteurs/list">Secteurs List</a>
            <a class="navbar-brand" href=''>/</a>
            <a class="navbar-brand" href="#">Edit Secteur </a>
        </nav>

        <center>
                @if(session()->has('message'))
            
                <div class='alert alert-success'>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                  x
                </button>
                {{session()->get('message')}}

                @endif
        </center>

        <div style="display: flex;flex-direction: row; gap: 100px;">
            <div style="background-color: white;padding: 10px;border: 1px solid white;width:80%; margin-right:20%">
            
            <div style="">
                <div>
                    Secteur name :
                    <input id="firstname" value="{{$secteur->libelle}}" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                </div><br>

                <div>
                    Description : 
                    <input id="name" value="{{$secteur->description}}" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div><br>

                <div class="mt-4">
                    <center><br><a href="{{url('/secteurs/update', $secteur->id)}}"><button class="btn btn-danger">Save changes</button></a></center>
                </div>
            </div>

            </div>
            
        </div>

        
        </div>
@stop

