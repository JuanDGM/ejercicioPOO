<?php

class clase1{

    private function saludar(){
        return "Saludando";
    }

    private function enviarSaludo(){
        self::saludar();

    }
}

$obj = new clase1();

echo $obj->saludar();

?>