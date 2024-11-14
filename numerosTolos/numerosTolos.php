<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Tolos</title>
</head>
<style>

.negativo{color: red;}
.positivo{color: green;}
.pares{font-family: Verdana, Geneva, Tahoma, sans-serif;}
.impares{font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
.celda1{background-color: gray;}
.celda2{background-color: lightgray;}

</style>
<body>
    <h1>A aplicación debe pedir un número nun formulario, a continuación a aplicación ten que xerar tantos números aleatorios como se lle pediu ao usuario entre -100 e 100 e gardaraos nun array.
A aplicación debe mostrar nunha táboa todos os números, pero na orde inversa ao que se introduciron.
Os números teñen que mostrarse con varios estilos diferenciados seguindo as seguintes regras:
•	Números negativos: texto en vermello.
•	Números positivos: texto en verde.
•	Números pares con un tipo de letra.
•	Números impares con outro tipo de letra.
•	O fondo da cela da táboa ten que ir alternando entre un gris máis escuro e un gris máis claro.
</h1>

<form action="numerosTolos.php">
        <label for="Introduce un numero">Introduce el numero de numeros que quieres generar</label>
        <input type="number" name="valor">
    </form>

<?php

if(isset($_GET["valor"])){
    $numeroIntroducido = $_GET["valor"];
    echo $numeroIntroducido . " ";
    for($i = 0; $i < $numeroIntroducido; $i++){
        $arrayNumeros[] = rand(-100, 100);
    }
    echo print_r( $arrayNumeros );


echo"<table>";
$colorFila = "celda1";
foreach($arrayNumeros as $numero ){
    // Si el numero cumple la condicion que esta entre()seria true e iria a la primera opcion y si es false a la segunda
    $numeroCondicion = ($numero < 0)? "negativo":"positivo";
    $numeroCondicion2 = ($numero %2 ==0)? "par":"impar";
     
    $colorCondicion = ($colorFila == "celda1")? "celda2":"celda1";
    $colorFila = $colorCondicion;
    echo $colorCondicion;
    echo"<tr class='$colorCondicion'>";
    echo"<td class='$numeroCondicion $numeroCondicion2'>$numero</td>";
    echo"</tr>";
    
}
echo"</table>";



}







?>

</body>
</html>