<div style="margin-top: 0%; margin-left: 0%; position: fixed; width: 100%">
    <div class="" style="background-color: #1742a4; height: 70px">
        <ul class="nav" style="margin-left: 0px;"> 
            <li class="nav-item" >
                <a style="color:white; margin-top: 15px" class="nav-link" href="/home"><img style="height: 40px; width: 90px" src="app_logo.png" alt=""></a>
            </li>
            
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:white"class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Qui sommes nous ?</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="#">A PROPOS DE MY FORMATION</a></li>
                    <li><a class="dropdown-item" href="#">CHIFFRE CLES</a></li>
                    <li><a class="dropdown-item" href="#">INFORMATIONS PRATIQUES</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:white"class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another link</a></li>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:white"class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Formations</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="#">Par secteur</a></li>
                    <li><a class="dropdown-item" href="#">Par métier</a></li>
                </ul>
            </li> 
            <li class="nav-item dropdown" style="color:white; margin-top: 20px; margin-left: 30px">
                <a style="color:white"class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contact</a>
                <ul class="dropdown-menu" style="background-color:#1742a4; ">
                    <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                    <li><a class="dropdown-item" href="#">Documents My Formation</a></li>
                </ul>
            </li> 
            <li class="nav-item" >
                <a style="color:white; margin-top: 20px; margin-left: 30px" class="nav-link" href="#">Panier</a>

            </li>

            @if (Route::has('login'))

            @auth
                <li class="nav-item" style="color:white; margin-top: 20px; margin-left: 30px">
                    <x-app-layout>

                    </x-app-layout>
                </li>

            @else
                <li class="nav-item" >
                    <a style="color:white; margin-top: 15px; margin-left: 30px" href="{{ route('login') }}" class="nav-link"><button type="button" class="btn btn-primary">Sign in</button></a>
                </li>
                <li class="nav-item" >
                    <a style="color:white; margin-top: 15px;" href="{{ route('register') }}" class="nav-link"><button type="button" class="btn btn-dark">Sign up</button></a>
                </li>
            @endauth
            @endif

        </ul>
    </div>
</div>