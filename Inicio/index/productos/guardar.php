<?php 

include("base.php");

if (isset($_POST["envio"])){
    $id = intval($_POST["productoID"]);
    $nombre = $_POST["nombre"];
    $categoria = intval($_POST["categoria"]);
    $precio = intval($_POST["precio"]);
    $peso = $_POST["peso"];
    $descripcion = $_POST["descripcion"];
    $imagen = $_POST["imagen"];
    $stock = intval($_POST["stock"]);

    $insertar = "INSERT INTO productos(productosID, nombre, categoria_id, precio, peso, descripcion, imagen, stock) VALUES (DEFAULT,'$nombre',$categoria,$precio,'$peso','$descripcion','$imagen',$stock)";
    $resultado = mysqli_query($DB,$insertar);

    if (!$resultado){
        $_SESSION['notificacion'] = 'No se pudo agregar';
        $_SESSION['color'] = 'warning';

        header("location: productos.php");
    };

    $_SESSION['notificacion'] = 'Agregado a la lista de productos.';
    $_SESSION['color'] = 'success';

    header("location: productos.php");

};


?>