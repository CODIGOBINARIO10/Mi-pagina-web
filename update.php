<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM contac WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Editar Usuarios</title>
</head>
<body>
    <div class="users-form">
     <form action="edit_user.php" method="POST">
        <h1>Editar usuario</h1>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="nombres" placeholder="Nombres" value="<?= $row['nombres'] ?>">
        <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $row['apellidos']?>">
        <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
        <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

        <input type="submit" value="Actualizar información">
     </form>
    </div>
</body>
</html>