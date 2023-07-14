<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        body{
            -background-color: rgb(62, 173, 162,0.7);
            background-image: linear-gradient(rgba(62,173,162,0.7),rgba(62,173,162,0.7)),url('{{ url("images/logo.png") }}');
            background-size: cover;
        }
        .logo_principal{
            width: 50%;
            margin: auto;
            padding-top: 5rem;
            }
        main{
            width: 70%;
            margin: auto;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            padding-top: 4rem;
            margin-top: 4rem;
            background-color: rgb(232, 229, 229); 
        }
        .formulario {

            -padding: 1rem;
            font-size: 18px;
            width: 70%;
            
        }

        .login_titulo{
            padding: 2rem;
            font-weight: bolder;
            color:#012060;
        }
        
    
        .input{
            width: 16rem;
            float: right;
            border-radius: 5px;
            padding-bottom: .5rem; 
           
        }
        .formulario div{
            padding: 1rem;
        }
        .boton{
            padding: 1rem;
            border-radius: 6px;
            background: linear-gradient(180deg, #65bce8 0%, #306485 100%);
            -background-color: #012060;
            color: white;
            width: 21.7rem;
            text-align: center;
            letter-spacing: 1rem;
            font-size: 20px;
        }
        .boton:focus{
            
            background-position: 0 -50px;
            transition: all .3s;
            cursor: pointer;
        }
        .enlace{
            padding: 4rem;
            padding-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="logo_principal" >   
    <main>
        <div class="login_titulo">
            <h2>ENTRA A TU CUENTA</h1>
            <h3>Ingresa tus datos correctamente</h3>
        </div>
        <div class=formulario>
            <form action="/login" method="POST">
                @csrf
           
                <div>
                    <label for="email">Email:
                    <input class="input" type="email" name ="email" id="email"></label>
                </div>
                
                <div>
                    <label for="password">Password
                    <input class="input" type="password" name="password" id ="password" ></label>
                </div>

                <div>
                    <input class="boton" type="submit" value="Entrar">
                </div>

                <div>
                    <a class= "enlace" href="#">¿Has olvidado tu contraseña?</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>