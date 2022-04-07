<?php

include_once('connection.php');

$name = $_POST['name'];
$wt = $_POST['worker-type'];
$email = $_POST['email'];
$password = $_POST['password'];

$validar = "SELECT Correo FROM usuarios WHERE Correo='$email';";
$consulta = mysqli_query($conn, $validar);

if(mysqli_num_rows($consulta)){ //verifica si el valor de filas que entrega existe o no, si existe, significa que el usuario ya se registro con ese correo.
      header('Location:signUp.php?msg=wena pa la callampa');
}else{
      $sql = "INSERT INTO usuarios (Nombre, Contraseña, Tipo, Correo) VALUES ('$name', '$password', '$wt', '$email')";
      if(mysqli_query($conn, $sql)){
            header('Location:login.php');
      }
}

mysqli_close($conn);
?>