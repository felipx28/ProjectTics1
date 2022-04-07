<?php
header('Location:calculoHonorario.php?mensaje=wena hijo del pico');
$valoresHonorario = json_decode($_POST['data']);
$honBrut = array_map('intval', $valoresHonorario[0]);   //selecciona el primer arreglo dentro del arreglo global 
$impRetHB = array_map('intval', $valoresHonorario[1]);  //selecciona el primer arreglo dentro del arreglo global 

function impHonorario($honBrut, $impRetHB) {
    $factorSalariado = 0;
    $cantidadARebajar = 0;
    $impAPHB = 0; //impuesto anual a pagar HB
    $impAPfinal = 0; //valor final del impuesto anual a pagar
    $resta=0;

    foreach($honBrut as $plata) {
        $impAPHB += $plata; //Sueldo anual
    }

    foreach($impRetHB as $imp) {
        $impAPfinal += $imp; 
    }
    
    if($impAPHB >= 0 && $impAPHB < 8266698){

        header("Location:calculoHonorario.php?resultado=El usuario esta extento");
        exit();
    } else if ($impAPHB >= 8266698 && $impAPHB < 18370440){
        $factorSalariado = 0.04;        
        $cantidadARebajar = 330667;
        
    } else if ($impAPHB >= 18370440 && $impAPHB < 30617400) {
        $factorSalariado = 0.08;
        $cantidadARebajar = 1065485;
    
    }else if ($impAPHB >= 30617400 && $impAPHB < 42864360) {
        $factorSalariado = 0.135;        
        $cantidadARebajar = 2749442;

    }else if ($impAPHB >= 42864360 && $impAPHB < 55111320) {
        $factorSalariado = 0.23;        
        $cantidadARebajar = 6821556;

    }else if ($impAPHB >= 55111320 && $impAPHB < 73481760) {
        $factorSalariado = 0.304;        
        $cantidadARebajar = 10889794;

    }else if ($impAPHB >= 73481760 && $impAPHB < 189827880) {
        $factorSalariado = 0.35;        
        $cantidadARebajar = 14279955;

    }else if ($impAPHB >= 189827880) {
        $factorSalariado = 0.4;        
        $cantidadARebajar = 23771349;
    }
    
    //$aux = $impAPHB;
    $impAPHB = (($impAPHB - ($impAPHB * 0.3)) * $factorSalariado) - $cantidadARebajar;
    //$impRAH = $aux * 0.1225;
    $resta = $impAPfinal - $impAPHB;

    if($resta < 0){
        //"El usuario debe pagar impuesto equivalente a: $resta";
        //header('Location:resultado.php');
        header("Location:calculoHonorario.php?resultado=El usuario debe pagar impuesto equivalente a: " .$resta);
        exit();
    }else{
        // "Al usuario se le debe devolver impuesto equivalente a : $resta";
        //header('Location:resultado.php');
        header("Location:calculoHonorario.php?resultado=Al usuario se le debe devolver impuesto equivalente a : " . $resta);
        exit();
    }
}


//echo impHonorario($honBrut, $impRetHB);
?>