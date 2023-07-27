<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Titulo de página -->
    <title>INCO ACADEMY | Inscribete a nuestras formaciones</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" class="rel">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    @yield('css')
    @yield('script')
    
</head>
<body>
 <body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-dashboard'></i>
            <span class="logo_name">INCO</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboard') }}" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('charts') }}" class="active">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Graficos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Ajustes</span>
                </a>
            </li>
            <li class="log_out">
                <a href="{{route('logout')}}">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">Dashboard</span>
            </div>
           
            <div class="profile-details">
                <!-- <img src="images/profile.jpg" alt="" /> -->
                <div>
                    @auth
                        Bienvenido: 
                        {{Auth::user()->nombre}} 
                    @endauth
                </div>
                {{-- <span class="admin_name">Usuario</span>
                <i class="bx bx-chevron-down"></i> --}}
                {{-- <div>
                    @auth
                        <a href="{{route('logout')}}">cerrar sesión</a> 
                    @endauth
                </div> --}}
            </div>
            
        </nav>

        <div class="home-content">
            @yield('content')
            @yield('js')
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>
  
</html>