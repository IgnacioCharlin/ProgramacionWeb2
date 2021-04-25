<?php
require_once('Ejercicio-1/ejercicio1.php');
require_once('Ejercicio-2/ejercicio-2.php');
require_once('Ejercicio-3/ejercicio3.php');
require_once('Ejercicio-4/ejercicio4.php');
require_once('Ejercicio-5/ejercicio5.php');
require_once('Ejercicio-6/NombreCompleto.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducion a PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="estilos.css" />
</head>
<body>
<main class="container-fluid">
    <H1 class="display-1 text-center p-4 text-light">Charlin Ignacio</H1>
    <div class="card text-center w-50 mx-auto bg-primary text-white">
        <div class="card-header">
            <p class="display-6">Ejercicio 1</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto
                (“rojo”,“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                “avance” o “estado desconocido” ante un caso no esperado.</h5>
            <div class="card-footer">
                <p class="mt-4">a) Resuelva la solución utilizando if else Rojo : <span class="fw-bold"> <?php a("rojo"); ?></span> <br/></p>
                <p>b) Resuelva la solución utilizando if inline (return ?: ) Amarillo :<span class="fw-bold"> <?php b("amarillo"); ?></span> <br/></p>
                <p>c) Resuelva la solución utilizando switch Verde:  <span class="fw-bold"><?php c("verde"); ?> </span></p>
            </div>
        </div>
    </div>
    <div class="card text-center w-50 mx-auto bg-primary text-white mt-4">
        <div class="card-header">
            <p class="display-6">Ejercicio 2</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Cree una función llamada binomio CuadradoPerfecto que realice la ecuación de dicha problemática:
                recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
                2.</h5>
            <div class="card-footer">
                <p class="mt-4">a) Resuelva la solución utilizando la función de potencia con valores 5 y 2 : <span class="fw-bold"> <?php potencia1(5, 2); ?></span> <br/></p>
                <p>b) Resuelva la solución utilizando la fórmula desarrollada del binomio: a 2 + 2*a*b + b con valores 2 y 2 : <span class="fw-bold"> <?php binomio(2, 2); ?></span></p>
            </div>
        </div>
    </div>
    <div class="card text-center w-50 mx-auto bg-primary text-white mt-4">
        <div class="card-header">
            <p class="display-6">Ejercicio 3</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Cree una función llamada concatenar que reciba dos textos y devuelva ambos textos concatenados
                como uno.</h5>
            <div class="card-footer">
                <p class="mt-4">a) Con los valores Hola , Mundo : <span class="fw-bold"> <?php concatenar('Hola', 'Mundo'); ?></span></p>
            </div>
        </div>
    </div>
    <div class="card text-center w-50 mx-auto bg-primary text-white mt-4">
        <div class="card-header">
            <p class="display-6">Ejercicio 4</p>
        </div>
        <div class="card-body">
            <h5 class="card-title"> Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                la función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros por
                referencia)</h5>
            <div class="card-footer">
                <p class="mt-4">Pasando por parametro el valor 4 : <span class="fw-bold"> <?php $valor = 4;
                                                                                                incrementar($valor);
                                                                                                echo $valor; ?><br/></p>
            </div>
        </div>
    </div>
    <div class="card text-center w-50 mx-auto bg-primary text-white mt-4">
        <div class="card-header">
            <p class="display-6">Ejercicio 5</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                valores con los valores en el vector [2, 5, 10, 1, 3] <?php $vector = [2, 5, 10, 1, 3]; ?> </h5>
            <div class="card-footer">
                <p class="mt-4">a) Resuelva la solución utilizando la estructura de control for:  <span class="fw-bold"> <?php sumatoriaA($vector); ?></span> <br/></p>
                <p>b) Resuelva la solución utilizando la estructura de control for each : <span class="fw-bold"> <?php sumatoriaB($vector); ?></span></p>
                <p>c) Resuelva la solución utilizando la estructura de control while : <span class="fw-bold"> <?php sumatoriaC($vector); ?></span></p>
            </div>
        </div>
    </div>
    <div class="card text-center w-50 mx-auto bg-primary text-white mt-4">
        <div class="card-header">
            <p class="display-6">Ejercicio 6</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,
                apellido y sexo por parámetro.
                Dicha clase debe implementar el método saludoFormal() el cual debe responder “Estimado Sr
                /Estimada Sra” según corresponda, nombre y apellido. Ej: “Estimado Sr. Facundo D’Aranno”
                Dicha clase debe implementar también el método saludoInformal() el cual debe responder “Hola
                Nombre”. Ej: “Hola Facundo”</h5>
            <div class="card-footer">
                <p class="mt-4">a) Saludo Formal con los valores (Ignaci , Charlin ,M) <?php $persona = new NombreCompleto('Ignacio', 'Charlin', 'M'); ?> :  <span class="fw-bold"> <?php echo($persona->saludoFormal()); ?></span> <br/></p>
                <p>b) Saludo Informal : <span class="fw-bold"> <?php echo($persona->saludoInformal()); ?></span></p>
            </div>
        </div>
    </div>
</main>
</body>
</html>

