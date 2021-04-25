<?php
    /*
    Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
    valores.
    a) Resuelva la solución utilizando la estructura de control for
    b) Resuelva la solución utilizando la estructura de control for each
    c) Resuelva la solución utilizando la estructura de control while
    */

    function sumatoriaA($vector){
        $sumatoria=0;
        for ($i=0;$i<count($vector);$i++){
            $sumatoria += $vector[$i];
        }
        echo($sumatoria);
        echo("<br/> <br/>");
    }

    function sumatoriaB($vector){
        $sumatoria = 0;
        foreach ($vector as $numero){
            $sumatoria += $numero;
        }

        echo($sumatoria);
        echo("<br/> <br/>");
    }

    function sumatoriaC($vector){
        $sumatoria = 0;
        $i = 0;
        while ($i<count($vector)){
            $sumatoria += $vector[$i];
            $i++;
        }
        echo ($sumatoria);
        echo("<br/> <br/>");
    }

?>
