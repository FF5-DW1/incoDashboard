{{-- <!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>INCO Dashboard</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head> --}}
@extends('layout.default')

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
                <a href="{{ route('registros') }}">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Registros</span>
                </a>
            </li>
            <li>
                <a href="{{ route('charts') }}">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Graficos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-coin-stack"></i>
                    <span class="links_name">Base Datos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Equipo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Ajustes</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
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
            <div class="search-box">
                <input type="text" placeholder="Search..." />
                <i class="bx bx-search"></i>
            </div>
            <div class="profile-details">
                <!-- <img src="images/profile.jpg" alt="" /> -->
                <span class="admin_name">Usuario</span>
                <!-- <i class="bx bx-chevron-down"></i> -->
            </div>
        </nav>


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