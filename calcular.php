<?php

$valorSalariado = json_decode($_POST['salariado']); 

$sueldoImp = array_map('intval', $valorSalariado[0]);  //selecciona el primer arreglo dentro del arreglo global 
$impRet = array_map('intval', $valorSalariado[1]);    //selecciona el primer arreglo dentro del arreglo global 


function impSalariado($sueldoImp, $impRet){
    $factorSalariado = 0;
    $cantidadARebajar = 0;
    $impAP = 0; //impueso anual a pagar
    $impMR = 0; //impuesto mensual retenido
    $resultado = 0;//$impAP - $impMR

    foreach($sueldoImp as $sueldo){
        $impAP += $sueldo;
    }

    foreach($impRet as $impuesto){
        $impMR += $impuesto;
    }

    if($impAP >= 0 && $impAP < 8266698){
        $pago = "exento";

        return "Usted está exento";
    } else if ($impAP >= 8266698 && $impAP < 18370440){
        $factorSalariado = 0.04;        
        $cantidadARebajar = 330667;
        
    } else if ($impAP >= 18370440 && $impAP < 30617400) {
        $factorSalariado = 0.08;
        $cantidadARebajar = 1065485;
    
    }else if ($impAP >= 30617400 && $impAP < 42864360) {
        $factorSalariado = 0.135;        
        $cantidadARebajar = 2749442;

    }else if ($impAP >= 42864360 && $impAP < 55111320) {
        $factorSalariado = 0.23;        
        $cantidadARebajar = 6821556;

    }else if ($impAP >= 55111320 && $impAP < 73481760) {
        $factorSalariado = 0.304;        
        $cantidadARebajar = 10889794;

    }else if ($impAP >= 73481760 && $impAP < 189827880) {
        $factorSalariado = 0.35;        
        $cantidadARebajar = 14279955;
        
    }else if ($impAP >= 189827880) {
        $factorSalariado = 0.4;        
        $cantidadARebajar = 23771349;
    }

    $aux = $impAP;
    $impAP = ($impAP * $factorSalariado) - $cantidadARebajar;
    //$impMR= ($aux * $factorSalariado) - $cantidadARebajar;
    $resta = $impMR - $impAP;

    if($resta < 0){
        return "El usuario debe pagar impuesto equivalente a: $resta";
    }else{
        return "Al usuario se le debe devolver impuesto equivalente a : $resta";
    }
}


echo impSalariado($sueldoImp, $impRet);
?>

