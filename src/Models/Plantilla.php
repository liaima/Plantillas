<?php

namespace Raiz\Models;

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
        return $textoMostrado."\n";
        
    }
}

