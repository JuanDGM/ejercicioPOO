<?php


class miClase{

    public $mensaje = "Holaaa";

    public static function metodo(){
        /* return $this->mensaje; */
        return 1;

    }

}

$obj = new miClase();

echo $obj->metodo();

/* echo miClase::metodo(); */

?>