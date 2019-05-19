<?php

require_once("../../vendor/autoload.php");


class MathTest extends PHPUnit\Framework\TestCase
{

    public function testaCriacaoInicialDaClasse()
    {
        $math = new TreinaWeb\Math();
        $this->assertInstanceOf('TreinaWeb\Math', 'Math');
    }

}