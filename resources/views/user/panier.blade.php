<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')
  </head>

  <body>
    @include('navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Panier</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Panier</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
        <center>
        @if(session()->has('message'))
            <div class='alert alert-success' >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                </button>
                {{session()->get('message')}}
            </div>
        @endif
    </center>


    @foreach($paniers as $panier)
    <div style="display: flex;flex-direction: row; gap: 30px; width:100%; margin-bottom:100px">
        <div class="card" style="width:50%; margin-left:6%">
            <div class="card-body">
                <div><h2 style="font-size:35px">Inscription</h2></div>
                <hr style="background-color:black">
                <div style="display: flex;flex-direction: row; gap: 150px; margin-top:5%; ">
                    <h2 style="color:green; font-size:35px">{{$panier->titre}}</h2>
                    <div style="display: flex; flex-direction: row; gap: 30px;">
                        <h2 style="color:red; font-size:35px">{{$panier->price}}.00 MAD</h2>
                        <a href="{{url('/panier/remove', $panier->id)}}"><button class="btn btn-danger" style="width:100px;height:50px; margin-top:10%; ">
                            <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg></i></button>
                            </center>
                        </a>
                    </div>
                </div><br><br>
                <span>Date de début : {{$panier->debut}}</span><br><br>

                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span><i class="bi bi-info-circle-fill"></i></span><span>DETAILS</span>
                    </a>
                </p>
                <div class="collapse" id="collapse">
                    <div class="card card-body">
                        <h2 style="font-size:25px">Informations</h2>
                        <p> <strong>Nom :</strong>  {{$panier->name}}</p>
                        <p> <strong>Prénom :</strong> {{$panier->firstname}}</p>
                        <p><strong>Email :</strong> {{$panier->email}}</p>
                        <p><strong>Téléphone :</strong> {{$panier->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:30%; margin-left:6%">
            <div class="card-body">
                <h2 style="font-size:35px">Total</h2>
                <hr style="background-color:black">
                <h5 style="font-size:30px">Montant total</h5><br>
                <h3 style="font-weight:bold; font-size:35px"><i class="bi bi-coin"></i> <span>{{$panier->price}}.00 MAD</span></h3><br>
                <hr style="background-color:black"><br>
                <button class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color:#EE730C; color:white; width:150px; height:50px"><i class="bi bi-cart-plus"></i> PAYER</button>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-top:2%; margin-bottom:100px" class="collapse" id="collapse2">
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
    @endforeach

        </div>
      </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
        <center>
        @if(session()->has('message_error'))
            <div class='alert alert-success' >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                </button>
                {{session()->get('message_error')}}
            </div>
        @endif
    </center>

   

    @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('script')
  </body>
</html>
