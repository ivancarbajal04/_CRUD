<?php  include("base.php") ?>

<?php  include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4" >
            <?php if(isset($_SESSION['notificacion'])){ ?>
            
                <div class="alert alert-<?= $_SESSION['color'];?>" role="alert">
                <?= $_SESSION['notificacion']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); }; ?>
            <div class="card card-body" style="background:#CECEF4">
                <form action="Guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="productos_id" class="form-control" placeholder="Producto elegido"
                        autofocus>
                        <br>
                        <input type="text" name="cantidad" class="form-control" placeholder="Cantidad"
                        autofocus>
                        <br>
                        <input type="text" name="precio_total" class="form-control" placeholder="Precio total"
                        autofocus>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="envio" class="alert alert-info" value="Agregar">
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-6">
        <FONT FACE="courier new">
                <table class="table">
                    <thead class="thead-dark">
                        <tr style="background-color: black; color: #FFFFFF">
                            <th scope="col">ID</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio total</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fondo">
                        <?php 
                        $traer = "SELECT ventas.ventasID, productos.nombre, ventas.cantidad, ventas.precio_total FROM ventas INNER JOIN productos ON productos.productosID=ventas.productos_id";
                        $all_products = mysqli_query($DB, $traer);
                        while($row = mysqli_fetch_array($all_products)){?>
                        <tr>
                            <td>
                                <?php 
                                echo $row['ventasID'];   
                                ?>
                            </td>
                            <td>
                                <center>
                            <?php 
                                echo $row['nombre'];   
                            ?>
                            </center>
                            </td>
                            <td>
                                <center>
                            <?php 
                                echo $row['cantidad'];   
                                ?>
                                </center>
                            </td>
                            <td>
                                <center>
                            <?php 
                                echo $row['precio_total'];   
                                ?>
                                </center>
                            </td>
                            <td>
                                <center>
                                <a href="Editar.php?ventasID=<?php echo $row['ventasID'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>

                                <a href="Borrar.php?ventasID=<?php echo $row['ventasID'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                </center>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </FONT>
        </div>

    </div>
</div>

<?php  include("includes/footer.php") ?>