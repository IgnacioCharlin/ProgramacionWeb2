<?php
    include_once ('../header.php');
    /*
     * Ejercicio 6: Contador de visitas… extraterrestres (al final entró jeje)
        Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
        nombre del visitante y planeta perteneciente (mediante un combo).
        Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
        cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
        planeta Tierra.
        Tip: Almacenar en un archivo (en el servidor) cada una de las visitas, para dicho almacenado, pueden
        utilizar formato json, archivo separado por comas, o algún otro tipo de su preferencia.
        Tip: Es recomendable, realizar el cálculo de visitas, cuando leen el archivo, justo antes de mostrarlo
     *
     */
?>

<form class="container" action="datos.php" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="planeta" class="form-label">Planeta</label>
        <input type="text" class="form-control" name="planeta" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
