<?php
    include_once ('../header.php');
    $nombre = $_GET['nombre'];
    echo "<div class='text-center'>
               <img src='../img/$nombre.png'>
               <p class='display-6'>$nombre</p>
           </div>";

?>