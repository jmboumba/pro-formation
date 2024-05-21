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
            <a class="navbar-brand" href="#">Users List</a>
        </nav>

        
        <form action="" method="post">
            <nav class="navbar navbar-expand-lg navbar-light bg-withe">
            
                    <a class="navbar-brand" href="#">
                        <div style="width:250px">
                            <form action="{{url('/users/search')}}">
                                <input name="name" type="text" class="form-control " placeholder="Search Users..."> 
                            </form> 
                        </div>
                    </a>
                    <a class="navbar-brand" href="#">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Three</option>
                        </select>
                    </a>
            </nav>
        </form>

        <?php
            
        ?>

        <div style="margin-top:50px">
            <table class="table">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)
                        <?php if($users->user_role == 1){$role_name = "Admin";}else{$role_name= "User";}?>
                        <tr>
                            <th scope="row">{{$users->id}}</th>
                            <td>{{$users->name}}</td>
                            <td>{{$users->firstname}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$role_name}}</td>
                            <td>Offline</td>
                            <td>
                                <a class="btn btn-success" href="{{url('/users/edit', $users->id)}}">Edit</a>
                                <button class="btn btn-danger">delete</button>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
@stop