<?php

final class Coche{
    public function getColor()
    {
        echo "Rojo";
    }
}

class CocheDeLujo extends Coche{
    //Error fatal, Clase no heredada.
}

?>