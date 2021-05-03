<?php

    $link = $_SERVER["HTTP_REFERER"];

    if (strpos($link, 'ejercicio-1') !== false) {
        header('location:../ejercicio-1/ejercicio1.php');
    }else{
        header('location:../ejercicio-2/ejercicio2.php');
    }


$nombre = $_POST['nombre'];
    move_uploaded_file($_FILES["imagen"]["tmp_name"],"../img/".$nombre.".png");
?>