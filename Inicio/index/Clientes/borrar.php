<?php

include("base.php");

if($_GET['clienteID']){
    $cID = $_GET["clienteID"];
    $borrado = "DELETE FROM cliente WHERE clienteID = $cID";
    $resultado = mysqli_query($DB, $borrado);

    $_SESSION['notificacion'] = 'Borrado de la lista de productos';
    $_SESSION['color'] = 'danger'; 

    header("location: clientes.php");
}
?>