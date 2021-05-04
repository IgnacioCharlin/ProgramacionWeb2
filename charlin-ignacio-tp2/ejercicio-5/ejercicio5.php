<?php
include_once ('../header.php');
/*
 *
 * Solicite mediante un formulario, la dimensión de una matriz cuadrada.
En la siguiente página, cree esa matriz de NxN completa con valores incrementales y realice las
siguientes acciones:
a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
diagonal principal (1,12,23,etc).
b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
diagonal secundaria (10,19,28,etc)
c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
resultado
Tip: En los pasos a y b, no utilice un while, ni un flag, sólo con el contador del for debe alcanzar.
Analice las posiciones de la matriz que componen las diagonales ;)
 */


?>

<form action="array.php" method="post" class="container">
    <label for="datos">Valor 1:</label>
    <input class=" mb-3" type="number" name="datos[]"  required><br>
    <label for="datos">Valor 2:</label>
    <input class=" mb-3" type="number" name="datos[]"  required><br>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

