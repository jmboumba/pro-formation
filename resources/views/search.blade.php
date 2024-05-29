<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')

    @if(isset($secteurs))
    <title>Secteurs</title>
    @elseif(isset($metiers))
    <title>Métiers</title>
    @endif
    
  </head>

  <body>
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->

    @if(isset($secteurs))
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Formations / Secteur</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Secteur</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="row pb-3">
        @foreach($secteurs as $secteur)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img style="height:200px" class="card-img-top mb-2" src="/images/secteurs/{{$secteur->image}}" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{$secteur->libelle}}</h4>
                <a href="{{url('/formations/secteur', $secteur->id)}}" class="btn btn-primary px-4 mx-auto my-2"
                  >{{$secteur->libelle}}</a
                >
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </div>
    <!-- Blog End -->
    
    
    @elseif(isset($metiers))
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Formations / Métier</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Métier</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="row pb-3">
        @foreach($metiers as $metier)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img style="height:200px" class="card-img-top mb-2" src="/images/metiers/{{$metier->image}}" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{$metier->libelle}}</h4>
                <a href="{{url('/formations/metier', $metier->id)}}" class="btn btn-primary px-4 mx-auto my-2"
                  >{{$metier->libelle}}</a
                >
              </div>
            </div>
          </div>
          @endforeach
          
                  </div>
      </div>
    </div>
    <!-- Blog End -->
    @endif

    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('script')
  </body>
</html>
