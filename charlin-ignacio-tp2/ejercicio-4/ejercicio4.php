<?php

    include_once ('../header.php');
?>

<form action="datos.php" method="post" class="container">
    <input class="form-check-input mb-3" type="checkbox" name="platos[]" value="Entrada">
    <label for="platos">Entrada</label><br>
    <input class="form-check-input mb-3" type="checkbox" name="platos[]" value="Plato Principal">
    <label for="platos">Plato Principal</label><br>
    <input class="form-check-input mb-3" type="checkbox" name="platos[]" value="Acompañamiento">
    <label  for="platos">Acompañamiento</label><br>
    <input class="form-check-input mb-3" type="checkbox" name="platos[]" value="Postre">
    <label for="platos">Postre</label><br>

    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

