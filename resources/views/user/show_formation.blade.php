@extends('layouts.user')
    
@section('content')

    <div style="background-image: url('/images/data-center.png'); height:400px; color:white; background-repeat: no-repeat; width:100%; background-size: cover;">
        <div><br><br><br><br><br><br><br><br>
        <center><h1 style="font-size:50px">{{$formation->titre}}</h1></center>
        </div>
    </div>



    <div style="display: flex;flex-direction: row; gap: 30px; margin-top:5%; margin-left:6%">
        <div style="width:62%;">
            <div style="background-color: #EE730C; color:white; height:100px; "><br>
                <h1 style="margin-left:3%; font-size:35px">{{$formation->titre}}</h1>
            </div>
            <div style="margin-top:3%">
                <h1 style="font-size:35px">Objectifs pédagogiques</h1>
                {{$formation->objectifs}}
            </div>
            <div style="margin-top:3%">
                <h1 style="font-size:35px">Programme</h1>
                {{$formation->programme}}
            </div>
            <div style="margin-top:3%">
                <h1 style="font-size:35px">Niveau réquis</h1>
                {{$formation->niveau}}
            </div>
        </div>
        <div style="background-color:#F3F3F2; width:30%; height:400px; margin-right:6%;">
            <center>
                <div style="background-color:#1742a4; color:white; width:80%; height:200px">
                    <h1 style="font-size:35px">{{$formation->titre}}</h1>
                </div>
            </center>
            <div style="margin-left:10%; margin-top:10%">
                <p style="font-size:35px"><i class="bi bi-coin"></i> <span>{{$formation->price}}.00 MAD</span></p><br>
                <button data-toggle="modal" data-target="#exampleModal" style="background-color:#EE730C; width:150px; height:50px"><i class="bi bi-cart-plus"></i> S'inscrire</button>
                
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulaire d'inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire -->
                <form action="{{ url('/panier/' . $formation->id . '/') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="debut">Quand voulez-vous débuter ?</label>
                        <input type="date" class="form-control" id="debut" name="debut" required>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
    
    

    
    



