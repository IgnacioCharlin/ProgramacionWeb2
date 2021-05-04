<?php

    include_once ('../header.php');
    $menu = parse_ini_file("menu.ini");

    echo('<div class="container">');
    if(isset($_POST["platos"])){
        $platosSeleccionados = $_POST["platos"];
        $valor = '';

        foreach ($platosSeleccionados as $plato) {

            $valor .='- ' . $menu["$plato"] . '<br/>';
        }
        echo "<p class='display-5'>$valor</p>";
        }else{
            echo'<p> class="display-5">No se ingreso nada<p/>';
        }
        echo('<a href="ejercicio4.php" class="btn btn-primary">Volver a Pedir</a>');
        echo('<div/>');

?>