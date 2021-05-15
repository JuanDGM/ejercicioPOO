<?php

class retornoDatos{
    // tipo string
    // tipo entero
    // tipo arrglo
    // tipo json


    public function retornaString($edad){
        if($edad>=18){
            return "Es mayor de edad";
        }else{
            return "No es mayor de edad";
        }
    }

    public function retornaEntero($valor){

        if($valor>=0){
            return 1;
        }else{
            return 0;
        }
    }


    public function retornaArreglo($ciclo){

        $datos = array();

        for($i=0;$i<$ciclo;$i++){
            $datos[$i] = $i;
        }
        return $datos;
    }

    public function retornaJson(){

        $arr = array(
            'hdd'=>20,
            'pantalla'=>21,
            'ram'=>8
        );

        return json_encode($arr);

    }


}


$cadena = new retornoDatos();

var_dump($cadena->retornaString(20));
echo "<br/>";
var_dump($cadena->retornaEntero(1));
echo "<br/>";
var_dump($cadena->retornaArreglo(3));
echo "<br/>";
var_dump($cadena->retornaJson());



?>