<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Blog Details</title>
    

    @include('head')
    
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
        <h3 class="display-3 font-weight-bold text-white">{{$actualite->titre}}</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Blog détails</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-8">
          <div class="d-flex flex-column text-left mb-3">
            <p class="section-title pr-5">
              <span class="pr-2">Details</span>
            </p>
            <h1 class="mb-3">{{$actualite->titre}}</h1>
            
          </div>
          <div class="mb-5">
            <img
              class="img-fluid rounded w-100 mb-4"
              src="/images/actus/{{$actualite->image}}"
              alt="Image"
            />
            <br><br>
            <h2 class="mb-4">CONTENU</h2>
            <p>
                {{$actualite->contenu}}
            </p>

            <br><br>
            <h2 class="mb-4">DATE</h2>
            <p>
                {{$actualite->created_at}}
            </p>
          </div>

          <!-- Related Post -->
          <div class="mb-5 mx-n3">
            
          </div>

          <!-- Comment List -->
          

          <!-- Comment Form -->
          <div class="bg-light p-5">
            <h2 class="mb-4">Laissez un commentaire</h2>
            <form>
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website" />
              </div>

              <div class="form-group">
                <label for="message">Message *</label>
                <textarea
                  id="message"
                  cols="30"
                  rows="5"
                  class="form-control"
                ></textarea>
              </div>
              <div class="form-group mb-0">
                <input
                  type="submit"
                  value="Leave Comment"
                  class="btn btn-primary px-3"
                />
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0">
          <!-- Author Bio -->
          <div
            class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4"
          >
            <h3 style="margin-bottom:30px" class="text-secondary mb-3">Formation</h3>
            <hr style="margin-bottom:30px">
            <h2 class="text-white m-0"> <span style="margin-top:30px">{{$formation->titre}}</span></h2>
            
           
        </div>
          <!-- Search Form -->
          

          <!-- Category List -->

          <!-- Single Image -->
          

          <!-- Recent Post -->
          

          <!-- Single Image -->
          

          <!-- Tag Cloud -->

          <!-- Single Image -->

          <!-- Plain Text -->
    
        </div>
      </div>
    </div>
    <!-- Detail End -->

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

    

    


    





    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    @include('script')
  </body>
</html>
