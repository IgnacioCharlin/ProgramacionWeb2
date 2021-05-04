    <?php

        include_once ('../header.php');
    ?>

    <div class="container">

<?php
    //Cargado de datos
    if(isset($_POST['datos'])){
        $dimensionArray = $_POST['datos'];
        $array = array();
        $contador=1;

        for ($i=0;$i<=$dimensionArray[0]-1;$i++) {
            for ($j = 0; $j < $dimensionArray[1]; $j++) {
                $array[$i][$j] = $contador;
                $contador++;
            }
        }
        //recorrer diagonal principal
        echo '<p class="display-6">Los valores de la diagonal principal son : <span class="fw-bold"> ';

        $valoresDiaPrincipal='';
        for($i=0; $i<$dimensionArray[0]; $i++){
            $valoresDiaPrincipal.= $array[$i][$i]. " ";
        }
        echo "$valoresDiaPrincipal </span></p><br/>";

        //recorrer diagonal secundaria
        echo '<p class="display-6">Los valores de la diagonal secundaria son : <span class="fw-bold"> ';
        $j = sizeof($array)-1;
        $valoresDiaSecundaria='';
        for ($i=0;$i<sizeof($array);$i++){
            $valoresDiaSecundaria.= $array[$i][$j]." ";
            $j--;
        }
        echo "$valoresDiaSecundaria </span></p><br/>";

        //Sumatoria de valores de array
        $sumatoriaTotal=0;
        for ($i=0;$i<=$dimensionArray[0]-1;$i++) {
            for ($j = 0; $j < $dimensionArray[1]; $j++) {
                $sumatoriaTotal+= $array[$i][$j];
            }
        }
        echo "<p class='display-6'>La suma total de los valores son:  <span class='fw-bold'> $sumatoriaTotal<span/></p>";

        echo('<a href="ejercicio5.php" class="btn btn-primary">Otro Array</a>');


 }

?>
    </div>
