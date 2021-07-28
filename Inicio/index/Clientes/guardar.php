<?php 

include("base.php");

if (isset($_POST["envio"])){
    $id = intval($_POST["clienteID"]);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $domicilio = $_POST["domicilio"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];

    $insertar = "INSERT INTO cliente(clienteID, nombre, apellido, domicilio, fecha_nacimiento, celular, email) VALUES (DEFAULT,'$nombre', '$apellido','$domicilio','$fecha_nacimiento','$celular','$email')";
    $resultado = mysqli_query($DB,$insertar);

    if (!$resultado){
        $_SESSION['notificacion'] = 'No se pudo agregar';
        $_SESSION['color'] = 'warning';

        header("location: productos.php");
    };

    $_SESSION['notificacion'] = 'Agregado a la lista de productos.';
    $_SESSION['color'] = 'success';

    header("location: clientes.php");

};


?>