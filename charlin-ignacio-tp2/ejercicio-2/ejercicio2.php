
<main class="container">
<?php



    include_once ('../header.php');

    $directorio = '../img';
    $imagenes = array_diff(scandir($directorio), array('..', '.'));
    foreach ($imagenes as $imagen){
       $nombre=explode('.',$imagen);

       echo "<a href='../ejercicio-2/mostrar-imagen.php?nombre=$nombre[0]' class='display-6 text-center links'>$nombre[0]</a>";

    }
?>

<form action="../ejercicio-1/imagenes.php" method="POST" enctype="multipart/form-data">
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

?>