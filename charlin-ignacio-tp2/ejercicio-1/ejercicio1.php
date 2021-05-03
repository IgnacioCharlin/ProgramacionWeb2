<main class="container">
<?php

    include_once ('../header.php');

    $directorio = '../img';
    $imagenes = array_diff(scandir($directorio), array('..', '.'));
    foreach ($imagenes as $imagen){
       echo"<div class='text-center mb-4'><img src='../img/$imagen'>";
       $nombre=explode('.',$imagen);
       echo "<p class='display-6'>$nombre[0]</p> </div>";

    }
?>

<form action="imagenes.php" method="POST" enctype="multipart/form-data" name="ejercicio1">
    <div class="mb-3">
        <label for="nombre" class="form-label">nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="Imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="Imagen" name="imagen">
    </div>
    <button type="submit" class="btn btn-primary">Publicar </button>
</form>

</main>