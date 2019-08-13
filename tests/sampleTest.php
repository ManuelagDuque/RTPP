<?php
use PHPUnit\Framework\TestCase;

function suma($variable1, $variable2) {
    return $variable1+$variable2;
}

final class SampleTest extends TestCase
{
    public function testSuma() {
        $resultado=suma(1,3);
        $this->assertEquals($resultado,4);
    }
}



?>