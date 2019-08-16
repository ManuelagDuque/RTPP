 <?php
include BASE . "/src/controllers/registroController.php";




function enrutar()
{
    if (in_array("page", $_GET)) {
        if ($_GET["page"] == "registro") {
            $controller = new RegistroController();
            $controller->checkMethod();
        }
    }
}

echo 

?>