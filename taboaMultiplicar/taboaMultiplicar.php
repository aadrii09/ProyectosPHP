<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/globalStyles.css">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>A páxina web pedirá un número mediante un formulario. Ao enviar a información do formulario, deberase mostrar a táboa de multiplicar do número enviado.</h1>
    
    <form action="taboaMultiplicar.php">
        <label for="Introduce un numero">Introduce un numero</label>
        <input type="number" name="valor">
        <input type="submit" name="Enviar">
    </form>

<?php


if(isset($_GET["valor"])){  //esto sirve para saber si el dato introduccido existe
$numeroIntroducido = $_GET["valor"];

echo"<table>";
for($i = 0; $i <= 10;$i++){
    $multiplos = $numeroIntroducido * $i;
    echo"<tr>
        <td>$numeroIntroducido x $i =</td>
        <td>$multiplos</td>
        </tr>";
}
echo"</table>";

}
       

?>

</body>
</html>