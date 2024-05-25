@extends('layouts.admin.admin')
    
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-withe" style="margin-top:50px">
            <a class="navbar-brand" href="#">
                <div style="background-color: #c22eee ; width:40px; height:35px; border: 1px solid white; ">
                    <center>
                        <svg style="margin-top:8px; color:white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                    </center>
                </div> 
            </a>
            <a class="navbar-brand" href="/actu/list">Actualités List</a>
            <a class="navbar-brand" href="">/</a>
            <a class="navbar-brand">Ajouter une actualité</a>
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

        <div style="width:400px; margin-left:10%; margin-top:50px; width:80%">
            <form action="{{url('/actu/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3" style="margin-top:10%">
                        <label style="font-weight:bold" for="name" class="form-label">Concerne <span style="color:red">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="formation_id">
                            @foreach($formations as $formation)
                                <option value="{{$formation->id}}">{{$formation->titre}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label style="font-weight:bold" for="titre" class="form-label">Titre<span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="titre">
                </div>
                <div class="form-group">
                    <label style="font-weight:bold" for="contenu">Contenu</label>
                    <textarea name="contenu" class="form-control" id="contenu" rows="3"></textarea>
                </div><br>

                <div class="mb-3">
                    <label style="font-weight:bold" for="Image" class="form-label">Image :</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Ajouter une actualité</button><br><br><br><br>
            </form>
        </div>
        

        
@stop