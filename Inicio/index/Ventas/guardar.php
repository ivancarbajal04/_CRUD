<?php 

include("base.php");

if (isset($_POST["envio"])){
    $productos_id= intval($_POST["productos_id"]);
    $cantidad = intval($_POST["cantidad"]);
    $precio_total = intval($_POST["precio_total"]);

    $insertar = "INSERT INTO ventas(ventasID, productos_id, cantidad, precio_total) VALUES (DEFAULT,$productos_id, $cantidad,$precio_total)";
    $resultado = mysqli_query($DB,$insertar);

    $_SESSION['notificacion'] = 'Agregado a la lista de productos.';
    $_SESSION['color'] = 'success';

    header("location: ventas.php");

    if (!$resultado){
        $_SESSION['notificacion'] = 'No se pudo agregar';
        $_SESSION['color'] = 'warning';

        header("location: ventas.php");
    };

};


?>