<?php


$user = "root";
$pass = "";
$host = "localhost:3308";
$bbdd = "pulseinformatica";

$conexion = mysqli_connect($host, $user, $pass, $bbdd);


insertar($conexion);

function insertar($conexion){

    $nombre = $_POST["nombre"];
    $domicilio = $_POST["domicilio"];
    $poblacion = $_POST["poblacion"];
    $DNI = $_POST["DNI"];


    $consulta = "INSERT INTO hoja_de_trabajo (cliente, domicilio, poblacion, DNI) VALUES ('$nombre', '$domicilio', '$poblacion', '$DNI')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>


        