<?php

    /*
     * Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.
        a) Resuelva la solución utilizando if else
        b) Resuelva la solución utilizando if inline (return ?: )
        c) Resuelva la solución utilizando switch
     */

    function a($texto){
        if($texto == "rojo"){
            echo("Frene");
        }elseif ($texto == "amarillo"){
            echo ("Precaucion");
        }elseif ($texto == "verde"){
            echo ("Sigue");
        }else{
            echo("Estado desconocido");
        }
        echo"<br/> <br/>";
    }

    function b($texto){
        echo($texto=='rojo'?'Frene': ($texto=='amarillo' ? 'Precaucion' : ($texto == 'verde'?'Sigue':'Estado Desconocido')));
        echo"<br/> <br/>";
    }

    function c($texto){
        switch ($texto){
            case 'verde':
                echo 'Sigue';
                break;
            case 'amarillo':
                echo 'Precaucion';
                break;
            case 'rojo':
                echo 'Frene';
                break;
            default:
                echo 'Estado Desconocido';
                break;
        }
        echo"<br/> <br/>";
    }

?>