<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Titulo de página -->
        <title>INCO ACADEMY | Inscribete a nuestras formaciones</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Estilos -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" class="rel">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
        @yield('script')
        @yield('css')

    </head>
    <body>
        <div>
            @yield('content')
        </div>    
        @yield('js')    
    </body>  
</head>
</html>