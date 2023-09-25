<?php

$nombre = $_POST["nombre"];
$telefono =$_POST["telefono"];
$email =$_POST["email"];
$mensaje =$_POST["mensaje"];

$para = "deprakchopra@gmail.com";
$asunto = "Nuevo mensaje de $nombre";

$mensaje = "

  Nombre del remitente: ".$nombre."
  Celular: ".$telefono."
  correo: ".$email."
  mensaje: ".$mensaje."
";

  mail($para,$asunto,utf8_decode($mensaje));

  header ("location: contactos.php ");



?>