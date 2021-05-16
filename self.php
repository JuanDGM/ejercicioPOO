<?php


class Metodo{

    public function mandarColor($valor){

        if($valor==1){
            return "rojo";
        }else if($valor==2){
            return "Amarillo";
        }else if($valor==3){
            return "Azul";
        }
    }

    public function darAltaColor($tipoColor){

        return self::mandarColor($tipoColor);

    }
}


$obj = new Metodo();

echo $obj->darAltaColor(3);

?>