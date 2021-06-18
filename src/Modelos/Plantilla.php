<?php

namespace Raiz\Modelos;

class Plantilla{
    private string $texto;
    private array $variables;

    public function __construct(string $texto) {
        $this->texto = $texto;
        $this->variables = [];
                
        for($i=0;$i<strlen($texto);$i++){
            if ($texto[$i] == "$" and  $texto[$i+1] == "[") {
                $j = $i;
                $variable = "";
                while ($texto[$j] != "]") {
                    $variable .= $texto[$j];
                    $j++;
                }
                $variable .= "]";

                echo $variable."\n";
                array_push($this->variables, $variable);
            }
        }
    }
//Busca las variables y las cambia por el valor asignado
    public function imprimirPlantilla(){
        $textoMostrado = $this->texto;
        foreach ($this->variables as $variable) {
            echo $variable."\n";
            $textoMostrado = str_replace($variable, "CambioPrueba", $textoMostrado);                       
        }
        echo $textoMostrado."\n";

        /*
        $textoMostrado = $this->texto;
        
        for($i=0;$i<strlen($textoMostrado);$i++){
            if ($textoMostrado[$i] == "$" and  $textoMostrado[$i+1] == "[") {
                $j = $i;
                $variable = "";
                while ($textoMostrado[$j] != "]") {
                    $variable .= $textoMostrado[$j];
                    $j++;
                }
                $variable .= "]";

                echo $variable."\n";

                $textoMostrado = str_replace($variable, "CambioPrueba", $textoMostrado);
                echo $textoMostrado."\n";
            }
            //echo $textoMostrado[$i]."\n";
        }
        */
    }
}

$test = new Plantilla(texto: "Este es el Texto con la variable $[prueba] como queda? $[otraPrueba]");

$test->imprimirPlantilla();