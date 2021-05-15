<?php


class miClase{

    public $resultado = 0;


    public function miMetodo($v1,$v2){

        return $this->resultado = $v1 + $v2;
    
    }

}


$objeto = new miClase();

echo $objeto->miMetodo(2,3);

?>