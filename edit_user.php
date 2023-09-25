<?php

include('connection.php');
$con = connection();

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "UPDATE contac SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: contactos.php");
};

?>