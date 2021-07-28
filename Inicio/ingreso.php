<?php include("base.php"); 

if(isset($_POST["ingreso"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

$verificar = "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$pass'";
$resultado = mysqli_query($DB, $verificar);
$filas = mysqli_num_rows($resultado);

};

if($filas){
    header("location:index/index.php");
}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTICACION</h1>
  <?php
};
mysqli_free_result($resultado);
?>