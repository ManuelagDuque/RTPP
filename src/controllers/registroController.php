<?php

final class RegistroController {
    public function checkMethod(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        else {
            include BASE . "/src/views/registro.php";
        }

    }

}

//function 

?>