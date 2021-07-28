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
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto"
                        autofocus>
                        <br>
                        <input type="number" name="categoria" class="form-control" placeholder="Numero de categoria del producto"
                        autofocus>
                        <br>
                        <input type="text" name="precio" class="form-control" placeholder="Precio del producto"
                        autofocus>
                        <br>
                        <input type="text" name="peso" class="form-control" placeholder="Peso del producto"
                        autofocus>
                        <br>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del producto"
                        autofocus>
                        <br>
                        <input type="text" name="imagen" class="form-control" placeholder="Imagen del producto"
                        autofocus>
                        <br>
                        <input type="text" name="stock" class="form-control" placeholder="Stock del producto"
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fondo">
                        <?php 
                        $traer = "SELECT * FROM productos";
                        $all_products = mysqli_query($DB, $traer);

                        while($row = mysqli_fetch_array($all_products)){?>
                        <tr>
                            <td>
                                <?php 
                                echo $row['productosID'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['nombre'];   
                            ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['categoria_id'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['precio'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['peso'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['descripcion'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['imagen'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['stock'];   
                                ?>
                            </td>
                            <td>
                                <center>
                                <a href="Editar.php?productosID=<?php echo $row['productosID'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>

                                <a href="Borrar.php?productosID=<?php echo $row['productosID'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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