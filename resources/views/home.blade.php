<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')
  </head>

  <body>
    @include('navbar')

    <!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
      <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0">Annuaire de Formation</h4>
        <h1 class="display-3 font-weight-bold text-white">
         La Formation professionnelle
        </h1>
        <p class="text-white mb-4">
          Sur notre plateforme, vous trouverez la formation qui 
          vous convient parmi des milliers. Quelque soit le secteur 
          ou le métier que vous visez. Ne tardez pas, recherchez votre formation !
        </p>
        <a href="/about" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="img/header.png" alt="" />
      </div>
    </div>
  </div>
  <!-- Header End -->

  

  <!-- About Start -->
  <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="/images/formation.png"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">A propos de nous</span>
            </p>
            <h1 class="mb-4">Annuaire de formation professionnelle</h1>
            <p>
            Nous sommes ravis de vous accueillir dans notre communauté dédiée 
            à l'apprentissage et au développement des compétences professionnelles. 
            Que vous soyez un débutant cherchant à acquérir de nouvelles compétences 
            ou un professionnel expérimenté désireux de perfectionner ses connaissances, 
            notre plateforme est conçue pour répondre à vos besoins.
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="/images/formation2.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Des 
                    milliers de formations
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Divers secteurs
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Plusieurs métiers
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- About End -->

  @include('populaires')

  <!-- Registration Start -->
  
  <!-- Registration End -->

  

  <!-- Testimonial Start -->
  
  <!-- Testimonial End -->

  <!-- Blog Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">DERNIERES ACTUALITES</span>
        </p>
        <h1 class="mb-4">Récents Articles de Notre Blog</h1>
      </div>
      <div class="row pb-3">

        @foreach($actualites as $actualite)
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow-sm mb-2">
            <img style="height:200px" class="card-img-top mb-2" src="/images/actus/{{$actualite->image}}" alt="" />
            <div class="card-body bg-light text-center p-4">
              <h4 class="">{{$actualite->titre}}</h4>
              <a href="{{ url('/actu/' . $actualite->id . '/details') }}" class="btn btn-primary px-4 mx-auto my-2"
                >Lire</a
              >
              <p style="margin-top:10px">
               <strong>Publication</strong> : {{$actualite->created_at}}
              </p>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
    </div>
  </div>
  <!-- Blog End -->

  <!-- Team Start -->
  @include('equipe')
  <!-- Team End -->

    

    @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('script')
  </body>
</html>
