<?php


class calculadora{


    public function calcularDatos($val1,$val2,$option){

        switch ($option) {
            case 'suma':
                return $val1 + $val2;
                break;
            case 'resta':
                return $val1 - $val2;
                break;
            case 'multiplicacion':
                return $val1 * $val2;
                break;
            case 'division':
                return $val1 / $val2;
                break;
            
            default:
                # code...
                break;
        }



    }


}




?>