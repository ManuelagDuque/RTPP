<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra TPP</title>
    <link rel="stylesheet" href="assets/RTPP.css">
</head>

<body>
    <header class="headerPantallaInicio">
        <img src="assets/logo_F5.png" alt="Logo Factoria F5" width="8%">
    </header>
    <div class="formularioLogin">
        <form method="POST" action="perfilCoder.html">
            <div class="input-group">
                <label for="name"> Nombres: </label>
                <input type="text" name="nombre" placeholder="Ramona" required>
            </div>

            <div class="input-group">
                <label for="name">Apellidos: </label>
                <input type="text" name="apellido" placeholder="Susana" required>
            </div>

            <div class="input-group">
                <label for="password"> Contraseña:</label>
                <input type="password" name="Contraseña" placeholder="" required>
            </div>

            <input type="submit" value="Login" class=buttonLogin>
            <input TYPE="hidden" name="redirect" value="perfilCoder.html">
        </form>



    </div>
</body>