<?php 

include("base.php");

if (isset($_POST["envio"])){
    $id = intval($_POST["categoriaID"]);
    $tipo_producto = $_POST["tipo_producto"];
    $marca = $_POST["marca"];
    $color = $_POST["color"];

    $insertar = "INSERT INTO categoria(categoriaID, tipo_producto, marca, color) VALUES (DEFAULT,'$tipo_producto', '$marca','$color')";
    $resultado = mysqli_query($DB,$insertar);

    if (!$resultado){
        $_SESSION['notificacion'] = 'No se pudo agregar';
        $_SESSION['color'] = 'warning';

        header("location: productos.php");
    };

    $_SESSION['notificacion'] = 'Agregado a la lista de productos.';
    $_SESSION['color'] = 'success';

    header("location: categorias.php");

};


?>