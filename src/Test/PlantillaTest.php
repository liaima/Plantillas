<?php

namespace Raiz\Test;


use Raiz\Models\Plantilla;

class PlantillaTest{
    private Plantilla $plantilla;

    public function __construct()
    {
        $this->plantilla = new Plantilla(texto: "Este es el Texto con la variable $[prueba] como queda? $[otraPrueba]");
    }

    public function testImpresion(){
        $plantillaImpresa = $this->plantilla->imprimirPlantilla();

        echo $plantillaImpresa;
    }
}


$test = new PlantillaTest();
$test->testImpresion();
