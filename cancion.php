<?php

class Cancion
{
    public function __constructor()
    {
    }

    public function getCancion($opcion, $single)
    {
        if ($opcion == 0) {
            if ($single == 1) {
                return "Mean - Disco: Speak Now (2010)";
            } else {
                return "Cold as you - Disco: Taylor Swift (2006)";
            } 
        } else if ($opcion == 1) {
            if ($single == 1) {
                return "Out of the woods - Disco: 1989 (2014)";
            } else {
                return "Getaway car - Disco: Reputation (2017)";
            } 
            
        } else { 
            if ($single == 1) {
                return "Willow - Disco: Evermore (2020)";
            } else {
                return "The last great american dynasty - Disco: Folklore (2020)";
            }
            
        }
    }
}
