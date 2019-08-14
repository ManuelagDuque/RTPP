<?php

final class RegistroController {
    public function checkMethod(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        else {
            $ruta= include BASE . "/src/views/registro.php";
            $ruta ();
        }

    }

}

//function 

?>