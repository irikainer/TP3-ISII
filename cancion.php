<?php

class Cancion
{

    public $opcion;

    public  function __constructor($valor)
    {
        $this->opcion = $valor;
    }

    public function getCancion()
    {

        if ($this->opcion == 0) {
            return "Cold as you - Disco: Taylor Swift (2006)";
        } else if ($this->opcion == 1) {
            return "Getaway car - Disco: Reputation (2017)";
        } else {
            return "The last great american dynasty - Disco: Folklore (2020)";
        }
    }
}
