@extends('layouts.user')
    
@section('content')

    <div style="display: flex;flex-direction: row; gap: 50px; margin-top:10%;">
        <div class="card" style="width:50%; margin-left:6%">
            <div class="card-body">
                <div><h2 style="font-size:35px">Inscription</h2></div>
                <hr style="background-color:black">
                <div style="display: flex;flex-direction: row; gap: 150px; margin-top:5%; ">
                    <h2 style="color:green; font-size:35px">{{$formation->titre}}</h2>
                    <div style="display: flex; flex-direction: row; gap: 30px;">
                        <h2 style="color:red; font-size:35px">{{$formation->price}}.00 MAD</h2>
                        <button class="btn btn-danger" style="height:50px; margin-top:10%; "><i class="bi bi-trash3-fill"></i></button>
                    </div>
                </div><br><br>
                <span>Date : {{$debut}} - </span>
                <span>Date de début : {{$debut}}</span><br><br>

                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span><i class="bi bi-info-circle-fill"></i></span><span>DETAILS</span>
                    </a>
                </p>
                <div class="collapse" id="collapse">
                    <div class="card card-body">
                        <p> <strong>Nom :</strong>  {{$user->name}}</p>
                        <p> <strong>Prénom :</strong> {{$user->firstname}}</p>
                        <p><strong>Email :</strong> {{$user->email}}</p>
                        <p><strong>Téléphone :</strong> {{$user->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:30%; margin-left:6%">
        <div class="card-body">
            <h2 style="font-size:35px">Total</h2>
            <hr style="background-color:black">
            <h5 style="font-size:30px">Montant total</h5><br>
            <h3 style="font-weight:bold; font-size:35px"><i class="bi bi-coin"></i> <span>{{$formation->price}}.00 MAD</span></h3><br>
            <hr style="background-color:black"><br>
            <button class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color:#EE730C; color:white; width:150px; height:50px"><i class="bi bi-cart-plus"></i> PAYER</button>
        </div>
        </div>
    </div>
    </div>

    <div style="margin-top:2%" class="collapse" id="collapse2">
        <center><h2 style="font-size:35px">Moyens de paiement</h2> </center>
        <div style="display:flex; flex-direction: row; gap: 200px; margin-top:5%; margin-left:15%;">
            <a href="">
            <div>
                <img src="/images/carte.png" alt="">
                <h1 style="font-size:35px">Paiement par carte</h1>
            </div>
            </a>
            <a href="">
            <div>
                <img src="/images/paypal.png" alt="">
                <h1 style="font-size:35px">Paiement par Paypal</h1>
            </div>
            </a>
        </div>
    </div>
    