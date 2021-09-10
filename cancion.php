<?php

class Cancion
{
    public function __constructor()
    {
    }

    public function getCancion($opcion)
    {
        if ($opcion == 0) {
            return "Cold as you - Disco: Taylor Swift (2006)";
        } else if ($opcion == 1) {
            return "Getaway car - Disco: Reputation (2017)";
        } else {
            return "The last great american dynasty - Disco: Folklore (2020)";
        }
    }
}
