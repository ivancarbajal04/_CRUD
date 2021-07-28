<?php

// QUERY FALLA, ARREGLAR 

include("base.php");

if($_GET['productosID']){
    $pID = $_GET["productosID"];
    $borrado = "DELETE FROM productos WHERE productosID = $pID";
    $resultado = mysqli_query($DB, $borrado);

    $_SESSION['notificacion'] = 'Borrado de la lista de productos';
    $_SESSION['color'] = 'danger'; 

    header("location: productos.php");
}
?>