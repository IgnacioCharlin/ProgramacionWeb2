<?php
    include_once ('../header.php');
    if (isset($_POST['nombre']) && isset($_POST['planeta'])) {
        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];
        $file = 'visitantes.json';
        $contadorVisitantesNoTierra=0;
        //Leemos lo que tiene el archivo json
        $datos_clientes = file_get_contents($file);

        if ($datos_clientes == '') {
            $datos_clientes .= '[]';
        }

        //convertimos el string en array
        $array_visitantes = json_decode($datos_clientes, true);
        //le cargamos los valores
        array_push($array_visitantes, [$nombre, $planeta]);
        //convertimos el array en string
        $json_string = json_encode($array_visitantes);
        //enviamos el string al archivo json
        file_put_contents($file, $json_string);


        ?>

<table class="table table-hover container">
    <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Planeta</th>
    </tr>
    </thead>
    <tbody>
    <tr>
<?php

        foreach ($array_visitantes as $visitante){
            if(in_array("tierra",$visitante)){
                $contadorVisitantesNoTierra++;
            }
            foreach ($visitante as $dato_visitante){
                echo "<td>$dato_visitante</td>";
            }
            echo "</tr>";
        }


?>
    </tbody>
</table>
<?php
        echo "<div class='container'><p class='display-6'> La cantidad de ingresantes que no son de la tierra :  $contadorVisitantesNoTierra </p>";
    }
echo('<a href="ejercicio6.php" class="btn btn-primary">Volver</a></div>');

?>
