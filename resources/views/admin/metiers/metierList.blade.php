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
            <a class="navbar-brand" href="/metiers/list">Métiers List</a>
            <a href="/metiers/add_view" style="margin-left:500px">
                <button class="btn btn-primary"><i class="bi bi-plus"></i> New</button>
            </a>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-withe">
            <a class="navbar-brand" href="#">
                <div style="width:250px">
                    <input type="text" class="form-control " placeholder="Search Users...">  
                </div>
            </a>
            <a class="navbar-brand" href="#">
                <select class="form-select" aria-label="Default select example">
                    <option selected>All</option>
                    @foreach($secteurs as $secteur)
                        <option value="{{$secteur->id}}">{{$secteur->libelle}}</option>
                    @endforeach
                </select>
            </a>
            
        </nav>
        <div style="margin-top:50px">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($metiers as $metier)
                            <tr>
                                <th scope="row">{{$metier->id}}</th>
                                <td>{{$metier->libelle}}</td>
                                <td>{{$metier->description}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('/metiers/edit', $metier->id)}}">Edit</a>
                                    <button class="btn btn-danger">delete</button>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@stop