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
        <h3 class="display-3 font-weight-bold text-white">A propos de nous</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a href="/" class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">A propos de nous</p>
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

    <!-- Facilities Start -->
    @include('facilities')
    <!-- Facilities Start -->

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
