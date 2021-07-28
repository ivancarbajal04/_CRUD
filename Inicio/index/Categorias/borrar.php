<?php

include("base.php");

if($_GET['categoriaID']){
    $cID = $_GET["categoriaID"];
    $borrado = "DELETE FROM categoria WHERE categoriaID = $cID";
    $resultado = mysqli_query($DB, $borrado);

    $_SESSION['notificacion'] = 'Borrado de la lista de productos';
    $_SESSION['color'] = 'danger'; 

    header("location: categorias.php");
}
?>