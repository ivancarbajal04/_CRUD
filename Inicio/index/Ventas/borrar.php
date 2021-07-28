<?php

include("base.php");

if($_GET['ventasID']){
    $vID = $_GET["ventasID"];
    $borrado = "DELETE FROM ventas WHERE ventasID = $vID";
    $resultado = mysqli_query($DB, $borrado);

    $_SESSION['notificacion'] = 'Borrado de la lista de productos';
    $_SESSION['color'] = 'danger'; 

    header("location: ventas.php");
}
?>