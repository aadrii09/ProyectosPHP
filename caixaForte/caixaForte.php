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

<form action="caixaForte.php" method="post">
        <label for="Introduce numeros">Introduce numeros</label>
        <input type="number" name="numero">
        <input type="submit" name="Enviar" id="botonEnviar">
    </form>
    
    <?php

$numeroSecreto = 116900;
$numeroIntentos = 0;
if(isset($_POST["numero"])){
$numeroIntroducido = $_POST["numero"];
$numeroIntentos++;
if($numeroSecreto == $numeroIntroducido && $numeroIntentos <= 4){
    echo"Has acertado!¿Cómo lo supiste?";
    }else if($numeroIntentos == 1 ){
        echo"No has acertado";
        echo $numeroIntentos;
    }
    else if($numeroIntentos > 1){
        echo "Has vuelto a fallar, intentalo de nuevo";
    }else if($numeroIntentos >= 4){
        echo "Has fallado, ya no quedan mas oportunidades";
        
}
}


?>
</body>
</html>

<!-- esto sirve para cuando llegue a los 4 intentos se desactive el boton de enviar -->
<script>
    <?php
if($numeroIntentos >= 4):?>
    document.getElementById("botonEnviar").disabled=true;
    <?php
    endif;
    ?>
    
</script>
