<html>
<body>

<?php
    function imprimirGet($variable){
        if(isset($_GET[$variable])){
        echo "$variable: ".$_GET[$variable]. "<br/>";
        }
    }

    imprimirGet("user");
    imprimirGet("clave");
    imprimirGet("comidapreferida");
    echo"intereses";
    foreach ($_GET["intereses"] as $interes){
        echo $interes . "<br>";
    }
?>



</body>
</html>