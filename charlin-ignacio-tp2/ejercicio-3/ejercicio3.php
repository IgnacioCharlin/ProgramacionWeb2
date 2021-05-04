<?php

    include_once ('../header.php');
    echo ' <div class="container contenedor-dados">';
    $sumatoria=0;
    for ($i=0 ; $i<2;$i++) {
        $valor = rand(1, 6);
        $sumatoria += $valor;
        echo "<img class='dados' src='../ejercicio-3/dados/$valor.png'>";
    }
    echo '</div>';
    echo "<p class='container text-center mt-5 display-6'>El resultado de la suma es: <span class='fw-bold'>$sumatoria</span></p>";
    echo'<button class="btn btn-primary d-block mx-auto p-2" onclick="location.reload()">TIRAR</button>';

?>
