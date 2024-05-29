<div style="position: fixed; width: 100%; top:0">
    <div class="" style="background-color: white; height: 70px">
        <ul class="nav" style="margin-left: 0px;"> 
            <li class="nav-item" >
                <a style="color:black; margin-top: 10px" class="nav-link" href="/home"><img style="height: 40px; width: 100px" src="/app_logo.png" alt=""></a>
            </li>
            
            <li class="nav-item dropdown" style="color:black; margin-top: 20px; margin-left:150px; ">
                <a style="color:  #2bc0d5 " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Qui sommes nous ?</a>
                <ul class="dropdown-menu" style="width:300px">
                    <li><a class="dropdown-item" href="#">A PROPOS DE MY FORMATION</a></li>
                    <li><a class="dropdown-item" href="#">CHIFFRE CLES</a></li>
                    <li><a class="dropdown-item" href="#">INFORMATIONS PRATIQUES</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style=" margin-top: 20px; margin-left: 30px">
                <a style="color:  #2bc0d5 " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another link</a></li>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:  #2bc0d5 " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Formations</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="/formations/secteur">Par secteur</a></li>
                    <li><a class="dropdown-item" href="/formations/métier">Par métier</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:  #2bc0d5 " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contact</a>
                <ul class="dropdown-menu" style=" width:300px">
                    <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                    <li><a class="dropdown-item" href="#">Documents My Formation</a></li>
                </ul>
            </li> 

            @if (Route::has('login'))

            @auth
                <li class="nav-item" >
                    <a style="color:  #2bc0d5 ;margin-top: 20px;  height:200px " class="nav-link" href="/panier/show">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    </a>
                </li>
                <li class="nav-item" style="color:white; margin-top: 20px; margin-left: 100px;">
                    <x-app-layout>

                    </x-app-layout>
                </li>

            @else
                <li class="nav-item" >
                    <a style="color:white; margin-top: 10px; margin-left: 200px;" href="{{ route('login') }}" class="nav-link"><button style="background-color: #2bc0d5 ;" type="button" class="btn btn-primary">Sign in</button></a>
                </li>
                
            @endauth
            @endif

        </ul>
    </div>
</div>