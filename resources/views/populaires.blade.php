<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Formations populaires</span>
        </p>
        <h1 class="mb-4">Formations pour vous</h1>
      </div>
      <div class="row">
        @foreach($formations as $formation)
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img style="height:250px" class="card-img-top mb-2" src="images/formations/{{$formation->image}}" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">{{$formation->titre}}</h4>
            </div>
            
            <a href="{{ url('/formations/' . $formation->id . '/details') }}" class="btn btn-primary px-4 mx-auto mb-4">Détails</a>
            
          </div>
        </div>
        @endforeach
        

        

      </div>
    </div>
  </div>
  <!-- Class End -->