@extends('layouts.adminDefault')
    
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div style="background-color: #c22eee ; width:40px; height:35px; border: 1px solid white; ">
                    <center>
                        <svg style="margin-top:8px; color:white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                    </center>
                </div> 
            </a>
            <a class="navbar-brand" href="#">Dashboard</a>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div class="" style="background-color:  #f58a58  ; width:250px; height:250px; border: 1px solid white; ">
                    <center>
                        <h3 style='margin-top:30%'>10 000,0 USERS</h3>
                        <span>Hello</span><span>Hello</span>
                    </center>
                </div>
            </a>
            <a style="margin-left:50px" class="navbar-brand" href="#">
                <div class="" style="background-color:  #58c8f5  ; width:250px; height:250px; border: 1px solid white; ">
                    <center>
                        <h3 style='margin-top:30%'>10 000,0 VISITORS</h3>
                        <span>Hello</span><span>Hello</span>
                    </center>
                </div>
            </a>
            <a style="margin-left:50px" class="navbar-brand" href="#">
                <div class="" style="background-color:  #58f5c3  ; width:250px; height:250px; border: 1px solid white; ">
                    <center>
                        <h4 style='margin-top:30%'>10 000,0 INSCRIPTIONS</h4>
                        <span>Hello</span><span>Hello</span>
                    </center>
                </div>
            </a>
        </nav>
@stop