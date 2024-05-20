<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        
            
            <div>
                <input type="text" class="form-control " placeholder="Search Tasks...">   
            </div>
        
        
        <div>
            <a style="margin-right:20px;">
                <i class="bi bi-bell"></i>
            </a>
            
        </div>

        @if (Route::has('login'))

        @auth
            
        <div>
            <x-app-layout>
            </x-app-layout>
        </div>
            
        @endauth
        @endif
        
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">CCFormation</span> </a>
                    <div class="nav_list"> 
                        <a href="/admin_dashboard" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                        <a href="/users/list" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                        <a href="/secteurs/list" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Secteurs</span> </a> 
                        <a href="/metiers/list" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Métiers</span> </a> 
                        <a href="/formations/list" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Formations</span> </a> 
                        <a href="/actu/list" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Actualités</span> </a>
                        <a style="margin-top:0.1px" href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Inscriptions</span> </a> 
                    </div>
                </div> 
                
            </nav>
        </div>