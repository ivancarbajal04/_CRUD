<?php

    include("base.php");

    if(isset($_GET['categoriaID'])){
        $cID = intval($_GET['categoriaID']);
        $edit = "SELECT * FROM categoria WHERE categoriaID = $cID";
        $resultado = mysqli_query($DB, $edit);

        if(mysqli_num_rows($resultado) == 1){  
            
            $row = mysqli_fetch_array($resultado);
            
            $tipo_producto = $row['tipo_producto'];
            $marca = $row['marca'];
            $color = $row['color'];
        };
    };

?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body" style="background:#CECEF4">
                <form action="editar.php?categoriaID=<?php $_GET['categoriaID']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="tipo_producto" class="form-control" value="<?php echo $tipo_producto; ?>" placeholder="Edita el tipo de producto" autofocus>
                        <br>
                        <input type="text" name="marca" class="form-control" value= "<?php echo $marca; ?>" placeholder="Edita la marca" autofocus>
                        <br>
                        <input type="text" name="color" class="form-control" value= "<?php echo $color; ?>" placeholder="Edita el color" autofocus>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Actualizar" class="alert alert-info" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if(isset($_POST["Actualizar"])){
        $tipo_producto = $_POST["tipo_producto"];
        $marca = $_POST["marca"];
        $color = $_POST["color"];
    };

?>

<?php include("includes/footer.php"); ?>