<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')
    <title>Métiers</title>
    
  </head>

  <body>
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->


    @if($formations)
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Formations / <span style="color:red">{{$metiername}}</span></h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Métier</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    @if(isset($message))
    <div class="container-fluid pt-5">
        <h2>{{$message}}</h2>
    </div>
    @endif

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="row pb-3">
        @foreach($formations as $formation)
        <div class="col-lg-4 mb-4" style="hover : transform: translateY(-10px);">
            <div class="card border-0 shadow-sm mb-2">
              <img style="height:200px" class="card-img-top mb-2" src="/images/formations/{{$formation->image}}" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{$formation->titre}}</h4>
                <a href="{{ url('/formations/' . $formation->id . '/details') }}" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
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

    
    
    @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('script')
  </body>
</html>
