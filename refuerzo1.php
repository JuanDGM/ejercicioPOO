<?php

class vehiculo{
    
    public function metodo1(){
        return "Este es el metodo1 vehiculo";    
    }
    
}

class vehiculoVolador extends vehiculo{

    public function metodo2(){
        return parent::metodo1();
    }

    public function metodo1(){
        return "Este es el metodo1 vehiculo volador";    
    }

}

$obj = new vehiculoVolador();

echo $obj->metodo2();


?>