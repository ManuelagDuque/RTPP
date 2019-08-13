<?php
use PHPUnit\Framework\TestCase;

$BASE=getcwd();
define("BASE", $BASE);

final class RegistroControllerTest extends TestCase
{
    public function testMethodFunction() {
        $controlador= new RegistroController();
        $exist= method_exists($controlador, "checkMethod");
        $this->assertTrue($exist);
    }

    public function testMethodoFuntion2() {
        $controlador= new RegistroController();
        $controlador->checkMethod();
        /*$exist= method_exists($controlador, "checkMethod");
        $this->assertTrue($exist);*/
    }
}



?>