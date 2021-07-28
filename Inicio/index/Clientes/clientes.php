<?php  include("base.php") ?>

<?php  include("includes/header.php") ?>
    
<div class="container p-4" style="margin-left: 0;">
    <div class="row">
        <div class="col-md-3" >
            <?php if(isset($_SESSION['notificacion'])){ ?>
            
                <div class="alert alert-<?= $_SESSION['color'];?>" role="alert">
                <?= $_SESSION['notificacion']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); }; ?>
            <div class="card card-body" style="background:#CECEF4">
                <form action="Guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                        autofocus>
                        <br>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido"
                        autofocus>
                        <br>
                        <input type="text" name="domicilio" class="form-control" placeholder="Domicilio"
                        autofocus>
                        <br>
                        <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Nacimiento"
                        autofocus>
                        <br>
                        <input type="text" name="celular" class="form-control" placeholder="Celular"
                        autofocus>
                        <br>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                        autofocus>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="envio" class="alert alert-info" value="Agregar">
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-4">
        <FONT FACE="courier new">
                <table class="table">
                    <thead class="thead-dark">
                        <tr style="background-color: black; color: #FFFFFF">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">Nacimiento</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fondo">
                        <?php 
                        $traer = "SELECT * FROM cliente";
                        $all_products = mysqli_query($DB, $traer);

                        while($row = mysqli_fetch_array($all_products)){?>
                        <tr>
                            <td>
                                <?php 
                                echo $row['clienteID'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['nombre'];   
                            ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['apellido'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['domicilio'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['fecha_nacimiento'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['celular'];   
                                ?>
                            </td>
                            <td>
                            <?php 
                                echo $row['email'];   
                                ?>
                            </td>
                            <td>
                                <center>
                                <a href="Editar.php?clienteID=<?php echo $row['clienteID'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>

                                <a href="Borrar.php?clienteID=<?php echo $row['clienteID'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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