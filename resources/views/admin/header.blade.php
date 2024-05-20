<div style="margin-top: 0%; margin-left: 0%; position: fixed; width: 100%">
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav" style='background-color:  #1742a4 ; width: 100%'>
                <li class="nav-item">
                <div class="w3-sidebar w3-bar-block" style="display:none;z-index:5" id="mySidebar">
                <button class="w3-bar-item w3-button w3-xxlarge" onclick="w3_close()">Close &times;</button>
                <a href="#" class="w3-bar-item w3-button"><svg style="margin-left:0px;display:inline; margin-top:0px" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </svg><p style="display:inline;">Administrateur</p>
                </a>
                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>
                </li>
                <li class="nav-item" >
                    <a style="color:white; margin-left: 40px " class="nav-link" href="/"><img style="height: 40px; width: 90px" src="app_logo.png" alt=""></a>
                </li>
                <li class="nav-item" >
                    <a style="color:white; margin-left:120px" class="nav-link" href="/home"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg></a>
                </li>
                <li class="nav-item dropdown" style="color:white; margin-top: 7px; margin-left: 100px">
                    <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <a href=""><svg style="color:white; margin-top: 12px; margin-left: 8px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </a>
                    </div>
                </li>

                @if (Route::has('login'))

                @auth
                    <li class="nav-item" style="color:white; margin-top: 15px; margin-left: 150px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            </svg>
                    </li>
                    <li class="nav-item" style="color:white; margin-top: 12px; margin-left:0px">
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

                <li class="nav-item" >
                    <a href="">
                    <svg style="color:white; margin-top: 18px; margin-left:100px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    </a>
                </li>

                <li class="nav-item" style="color:white; margin-top: 18px; margin-left:30px">
                    <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                    </svg></a>
                </li>
            </ul>
        </div>
        
    </nav>
</div>