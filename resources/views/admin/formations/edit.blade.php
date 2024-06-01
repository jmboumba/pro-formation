@extends('layouts.admin.admin')
    
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-withe" style="margin-top:5%;">
            <a class="navbar-brand" href="#">
                <div style="background-color: #c22eee ; width:40px; height:35px; border: 1px solid white; ">
                    <center>
                        <svg style="margin-top:8px; color:white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                    </center>
                </div> 
            </a>
            <a class="navbar-brand" href="/formations/list">Formations List</a>
            <a class="navbar-brand">/</a>
            <a class="navbar-brand">Edit Formation </a>
        </nav>

        <center>
                @if(session()->has('message'))
            
                <div class='alert alert-success'>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                </button>
                {{session()->get('message')}}

                @endif
        </center>


            <div style="background-color: white;  padding: 60px; border: 1px solid white; ">
            <div style="display: flex;flex-direction: row; gap: 50px;">
                <div style="width:600px;">
                
                    <strong style="font-size:30px">Détails de la formation </strong>
                    <form action="{{url('/formation/update', $formation->id)}}" method="post">
                    @csrf

                    <div>
                        <p style="font-weight:bold">Change image :</p>
                        <input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" autocomplete="image" />
                    </div><br>
                    
                    <div>
                        <p style="font-weight:bold; margin-top:3%">Titre : </p>
                        <input id="titre" value="{{$formation->titre}}" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus autocomplete="titre" />
                    </div><br>

                    <div class="mb-3">
                            <p style="font-weight:bold">Métier : </p>
                            <select class="form-select" aria-label="Default select example" name="metier_id">
                                <option value="{{$metier->id}}">{{$metier->libelle}}</option>
                                @foreach($metiers as $metiers)
                                    <option value="{{$metiers->id}}">{{$metiers->libelle}}</option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        <p style="font-weight:bold">Durée : </p>
                        <input id="duree" value="{{$formation->duree}}" class="block mt-1 w-full" type="number" name="duree" min="1" :value="old('duree')" required autofocus autocomplete="duree" />
                    </div><br>

                    <div>
                        <p style="font-weight:bold">Prix : </p>
                        <input id="price" value="{{$formation->price}}" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="price" />
                    </div><br>

                    <div class="mb-3">
                        <label style="font-weight:bold" for="details" class="form-label">Objectifs :</label>
                        <br><textarea readwrite style="width:100%; height:300px" name="objectifs" >
                            {{$formation->objectifs}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label style="font-weight:bold" for="details" class="form-label">Programme</label>
                        <br><textarea readwrite style="width:100%; height:300px" name="programme" >
                            {{$formation->programme}}
                        </textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-danger">Save changes</button></a>
                    </div>
                </form>
                    
            </div>
            <div style="background-color: white;padding: 10px;border: 1px solid white; margin-top:5px">
                <img style="height:300px; width:350px;" src="/images/formations/{{$formation->image}}"/>
            </div>
        </div>

        
        </div>
@stop

