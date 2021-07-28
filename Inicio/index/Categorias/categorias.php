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
                        <input type="text" name="tipo_producto" class="form-control" placeholder="Tipo de producto"
                        autofocus>
                        <br>
                        <input type="text" name="marca" class="form-control" placeholder="Marca"
                        autofocus>
                        <br>
                        <input type="text" name="color" class="form-control" placeholder="Color"
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
                            <th scope="col">Tipo de producto</th>
                            <th scope="col">Marca</th>
                            <th scope="col">color</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fondo">
                        <?php 
                        $traer = "SELECT * FROM categoria";
                        $all_products = mysqli_query($DB, $traer);

                        while($row = mysqli_fetch_array($all_products)){?>
                        <tr>
                            <td>
                                <?php 
                                echo $row['categoriaID'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['tipo_producto'];   
                            ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['marca'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['color'];   
                                ?>
                            </td>
                            <td>
                                <center>
                                <a href="Editar.php?categoriaID=<?php echo $row['categoriaID'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>

                                <a href="Borrar.php?categoriaID=<?php echo $row['categoriaID'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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