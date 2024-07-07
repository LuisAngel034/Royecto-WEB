<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Acceso</title>
    <link rel="stylesheet" href="app/styles/login.css">
</head>
<body>
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" action="http://localhost/floreria?clase=controladorlogin&metodo=Acceso" method="POST" enctype="multipart/form-data">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" name="txtusuario" placeholder="Usuario" required>
                    
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="txtpassword" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Bienvenido
                </div>
                <hr>
                <div class="pie-form">
                    <a href="#">¿Perdiste tu contraseña?</a>
                    <a href="#">¿No tienes Cuenta? Registrate</a>
                    <hr>
                    <a href="#">« Volver</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>