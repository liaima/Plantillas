<?php declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Raiz\Models\Plantilla;

final class PlantillaTest extends TestCase{
    
    public function testImpresionPlantilla(){
        $texto="Este es el Texto con la variable $[prueba] como queda? $[otraPrueba]";
        $plantilla = new Plantilla(texto: $texto);

        $plantillaImpresa = $plantilla->imprimirPlantilla();

        echo $plantillaImpresa;

        $this->assertEquals($texto, $plantillaImpresa);

    }

/*
    public function __construct()
    {
        $this->plantilla = new Plantilla(texto: "Este es el Texto con la variable $[prueba] como queda? $[otraPrueba]");
    }

    public function testImpresion(){
        $plantillaImpresa = $this->plantilla->imprimirPlantilla();

        echo $plantillaImpresa;
    }*/
}

/*
$test = new PlantillaTest();
$test->testImpresion();
*/