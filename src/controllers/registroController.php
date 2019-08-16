<?php

final class RegistroController
{
    public function checkMethod()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            if ($_POST['nombre'] == 'manuela' && $_POST['apellido'] == 'grajales' && $_POST['contraseña'] == 'holamundo') {
                echo 'está logeado';
            } else {
                echo 'intentelo nuevamente';
            }
        } else {
            $ruta = include BASE . "/src/views/registroView.php";
            $ruta();
        }
    }
}

//function 
/* Array (
    [nombre] => Manuela 
    [apellido] => Grajales Duque 
    [Contraseña] => Holamundo 
    [redirect] => perfilCoder.html 
   )  
*/
