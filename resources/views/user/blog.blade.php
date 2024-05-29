<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')
    <title>Blog</title>
    
  </head>

  <body>
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Notre Blog</span></h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Notre blog</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="row pb-3">
        @foreach($actualites as $actualite)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img style="height:200px" class="card-img-top mb-2" src="/images/actus/{{$actualite->image}}" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{$actualite->titre}}</h4>
                <a href="{{ url('/actu/' . $actualite->id . '/details') }}" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          @endforeach
          
          <div class="col-md-12 mb-4">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
    


    
    @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('script')
  </body>
</html>
