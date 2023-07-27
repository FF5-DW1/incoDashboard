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
        <link rel="stylesheet" href="{{ asset('/css/login.css') }}" class="rel">
    </head>
    <body class="container-form">
        <div class="container-login" >   
            <div class="login-titulo">
                <img src="{{ asset('/images/inco_logo.png') }}" alt="Logo-inco">
                <h2>Inicia sesión</h2>
                <p>Bienvenido/a, ingresa tus datos para iniciar sesión</p>
            </div>

            <div class=formulario-login>
                <form action="/login" method="POST">
                    @csrf
                    <div class="label-input">
                        <label for="email">Email
                        <input type="email" name ="email" id="email" placeholder="Ingresa tu email"></label>
                    </div>
                    @error('email')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    @enderror
                    
                    <div class="label-input">
                        <label for="password">Contraseña
                        <input type="password" name="password" id ="password" placeholder="Ingresa tu contraseña"></label>
                    </div>
                    @error('password')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    @enderror

                    <div>
                        <input class="btn" type="submit" value="Entrar">
                    </div>

                    <div class="label-input">
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div> 
    </body> 
</html>