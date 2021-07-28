<?php

    include("base.php");

    if(isset($_GET['productosID'])){
        $pID = intval($_GET['productosID']);
        $edit = "SELECT * FROM productos WHERE productosID = $pID";
        $resultado = mysqli_query($DB, $edit);

        if(mysqli_num_rows($resultado) == 1){  
            
            $row = mysqli_fetch_array($resultado);
            
            $productosID = intval($row['productosID']);
            $nombre = $row['nombre'];
            $categoria = intval($row['categoria_id']);
            $precio = intval($row['precio']);
            $peso = $row['peso'];
            $descripcion = $row['descripcion'];
            $imagen = $row['imagen'];
            $stock = intval($row['stock']);
        };
    };

?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body" style="background:#CECEF4">
                <form action="editar.php?productosID=<?php $_GET['productosID']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Edita el nombre del producto" autofocus>
                        <br>
                        <input type="number" name="categoria" class="form-control" value= "<?php echo $categoria; ?>" placeholder="Edita el numero de categoria del producto" autofocus>
                        <br>
                        <input type="text" name="precio" class="form-control" value= "<?php echo $precio; ?>" placeholder="Edita el precio del producto" autofocus>
                        <br>
                        <input type="text" name="peso" class="form-control" value= "<?php echo $peso; ?>" placeholder="Edita el peso del producto" autofocus>
                        <br>
                        <input type="text" name="descripcion" class="form-control" value= "<?php echo $descripcion; ?>" placeholder="Edita la descripcion del producto" autofocus>
                        <br>
                        <input type="text" name="imagen" class="form-control" value= "<?php echo $imagen; ?>" placeholder="Edita la imagen del producto" autofocus>
                        <br>
                        <input type="text" name="stock" class="form-control" value= "<?php echo $stock; ?>" placeholder="Edita el stock del producto" autofocus>
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
        $nombre = $_POST["nombre"];
        $categoria = intval($_POST["categoria"]);
        $precio = intval($_POST["precio"]);
        $peso = $_POST["peso"];
        $descripcion = $_POST["descripcion"];
        $imagen = $_POST["imagen"];
        $stock = intval($_POST["stock"]);
    };

?>

<?php include("includes/footer.php"); ?>