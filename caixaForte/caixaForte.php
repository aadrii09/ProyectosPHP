<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Forte</title>
</head>
<body>
    <h1>Realiza unha aplicación para o control de acceso a unha caixa forte.
A combinación secreta está composta de seis cifras e tan só pode haber catro intentos para abrir a caixa, esta cominación debe introducirse nun formulario e non se poderá ver en ningunha circunstancia.
Se o usuario acerta a combinación secreta, enviarase unha mensaxe de éxito, se non, unha mensaxe que diga “tente de novo” (ou algo do estilo). No caso de que se esgoten tódolos intentos débese inhabilitar o envío de máis intentos.
Neste exercicio, cada vez que se envíe a información do formulario deberase deixar o campo do formulario vacío.
As mensaxes de erro e éxito deberán mostrarse con estilos distintos que axuden a transmitir a información correspondente.
</h1>

<form  method="post">
        <label for="Introduce numeros">Introduce numeros</label>
        <input type="password" name="numero">
      
    
    <?php

$numeroSecreto = 116900;
$numeroSecretoStr = (string)$numeroSecreto; // Convierte a cadena



$numeroIntentos = isset($_POST["numeroIntentos"])? $_POST["numeroIntentos"]: 0;
$botonHidden = "";
if(isset($_POST["numero"])){
$numeroIntroducido = $_POST["numero"];
$numeroIntroducidoStr = (string)$numeroIntroducido;
$numeroIntentos++;

if($numeroIntentos == 4){
    $botonHidden = "hidden";
}
//con los 3 iguales compara el valor y tipo de dato,
 if($numeroSecretoStr === $numeroIntroducidoStr && $numeroIntentos <= 4){
    $botonHidden = "hidden";
    echo"Has acertado!¿Cómo lo supiste?";
    }else if($numeroIntentos == 1 ){
        echo"No has acertado, tienes mas intentos";
       
    }
    else if($numeroIntentos > 1 && $numeroIntentos <= 3){
        echo "Has vuelto a fallar, intentalo de nuevo";
    }else if($numeroIntentos == 4){
        echo "Has fallado, ya no quedan mas oportunidades";
        
} 
}


?>
<input type="hidden" name="numeroIntentos" value="<?php  echo $numeroIntentos ;   ?>">
 <input type="submit" name="Enviar" id="botonEnviar" <?php  echo $botonHidden ;   ?>  >
 </form>
</body>
</html>





























