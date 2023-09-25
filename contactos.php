<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM contac";
$query =mysqli_query($con, $sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseñador Web</title>
    
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>


<body>
    <div class="icons">
        <o href="#" class="Emilio"><h1>EMILIO REYES DESARROLLADORES WEB</h1></o>
        <a href="https://www.facebook.com/memilio.reyes" class="facebook" target="_blank">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.youtube.com/watch?v=kN1XP-Bef7w&list=PLE8uP447fYpis_9iiaT1GrdOLmg85pAJB" class="youtube" target="_blank">
            <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="https://wa.me/51949949518?text=Me%20interesa%20el%20servicio" class="whatsapp" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <div class="nav-bg">
       <nav class="navegacion-principal contenedor">
          <a href="index.html">Inicio</a>
          <a href="sobremi.html">Sobre Nosotros</a>
          <a href="clientes.html">Clientes</a>
          <a href="contactos.php">Contactos</a>
          <a href="https://wa.me/51949949518?text=Me%20interesa%20el%20servicio" target="_blank">949 949 518</a>
      </nav>
    </div>
           <!--Formulario-->

           <div class="users-form">
            <form action="insert_user.php"   method="POST">
                <h1>Registrar Usuario</h1>
                <input type="text" name="nombres" id="nombres" placeholder="Nombres">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
                <input type="text" name="telefono" id="telefono" placeholder="Telefono">
                <input type="text" name="email" id="email" placeholder="email">

                <input type="submit"onsubmit="return validarFormulario()" value="Agregar Usuario">
          
            </form>
           </div>
           <div class="users-table">
            <h2>Usuarios Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row= mysqli_fetch_array($query)):?>
                    <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['nombres'] ?></th>
                    <th> <?= $row['apellidos'] ?></th>
                    <th> <?= $row['telefono'] ?></th>
                    <th> <?= $row['email'] ?></th>
                    <th></th>

                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit" >Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
         <!-- Aquí se incluye el código JavaScript -->
    
    
     <footer class="footer">
    <p>Todos los derechos reservados. Emilio Reyes Freelancer</p>
    </footer>
    
   <script src="index.js"></script>
      
</body>
</html>