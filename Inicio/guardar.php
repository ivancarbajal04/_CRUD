<?php 

include("base.php");

if (isset($_POST["registro"])){
    $id = intval($_POST["usuarioid"]);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["nacimiento"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $insertar = "INSERT INTO usuarios(usuarioid, nombre, apellido, nacimiento, email, pass) VALUES (DEFAULT,'$nombre','$apellido','$nacimiento','$email','$pass')";
    $resultado = mysqli_query($DB,$insertar);

    header("location: index.php");

};


?>