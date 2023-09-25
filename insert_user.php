<!--para cuando el usuario de click en agregar usuario, sean insertados a la base de datos -->

<?php
include('connection.php');
$con = connection();

$id = null;
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO contac VALUES('$id', '$nombres', '$apellidos', '$telefono', '$email' )";
$query = mysqli_query($con, $sql);

if($query);
      Header("Location: contactos.php");

?>