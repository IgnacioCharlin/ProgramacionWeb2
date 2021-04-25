<?php
/*
    Cree una función llamada binomio CuadradoPerfecto que realice la ecuación de dicha problemática:
    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
    2
    a) Resuelva la solución utilizando la función de potencia
    b) Resuelva la solución utilizando la fórmula desarrollada del binomio: a
    2 + 2*a*b + b
*/

    function potencia1($valor1 , $valor2){
      echo pow(($valor1+$valor2),2);
      echo ("<br/> <br/>");
    }

    function binomio($valor1,$valor2){
        echo (pow($valor1,2))+(2*$valor1*$valor2)+(pow($valor2,2));
        echo ("<br/> <br/>");
    }


?>
