<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <main>
        <div>
            <form action="/login" method="POST">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name ="email" id="email">
                </div>
                
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id ="password" >
                </div>

                <div>
                    <input type="submit" value="Ingresar">
                </div>

                <div>
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>