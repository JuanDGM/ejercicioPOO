<?php

    class clasePadre{

        public function metodoPadre(){
            return "Hola desde el padre";
        }

        public function metodo1(){
            return "Este es el metodo1 del padre";
        }

    }

    class claseHijo extends clasePadre{

        public function metodoHijo(){
            return self::metodo1();
        }

        public function metodo1(){
            return "Este es el metodo1 del hijo";
        }

    }


$objHijo = new claseHijo();

echo $objHijo->metodoHijo();

// Instancia rapida con doble puntuación




?>