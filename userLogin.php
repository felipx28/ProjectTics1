<?php

include_once('connection.php');

$login_email = $_POST['loginEmail'];
$login_pass = $_POST['loginPassword'];
//Busque los datos donde correo y contraseña sean igual a los ingresados por el usuario
$validar = "SELECT Correo, Contraseña FROM usuarios WHERE Correo='$login_email' AND Contraseña='$login_pass';";
$consulta= mysqli_query($conn, $validar);

if (!$consulta){
    echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error ";
    echo mysqli_error($mysqli);
    exit;
}
//print_r(mysqli_fetch_assoc($consulta));
if($user = mysqli_fetch_assoc($consulta)){
    //Usuario contraseña correctos
    $tipoTrab = "";
    $consultar = "SELECT Tipo FROM usuarios WHERE Correo='$login_email' AND Contraseña='$login_pass';";
    $consulta = mysqli_query($conn, $consultar);
    
    $resultado = mysqli_fetch_row($consulta);
    $tipoTrab = $resultado[0];

    if($tipoTrab === "Dependiente"){
        header('Location:calculoHonorario.php');
    }else{
        header('Location:calculoSalariado.php');
    }
    
}else{
    header("Location:login.php?msg=Correo o contraseña incorrectas." );
    //Usuario o contraseña incorrectos
}

mysqli_close($conn);
?>