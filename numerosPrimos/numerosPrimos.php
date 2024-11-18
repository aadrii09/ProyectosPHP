<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>
<body>
    <h1>A aplicación debe pedir por pantalla dous números.
Ao enviar a información, deberemos mostrar todos os números primos que están entre os dous número que se introduciron.
</h1>
<form action="numerosPrimos.php">
        <label for="Introduce un numero">Introduce un numero</label>
        <input type="number" name="valor">
        <label for="Introduce un numero">Introduce otro numero</label>
        <input type="number" name="valor2">
        <input type="submit" name="Enviar">

    <?php
        
        function esPrimo($numero) {
            if ($numero < 2) return false; // Los números menores que 2 no son primos
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (isset($_GET["valor"])&& isset($_GET["valor2"])) {

            $valor = $_GET["valor"];
            $valor2 = $_GET["valor2"];

            for( $i = $valor; $i <= $valor2; $i++){
                if(esPrimo($i)==true){
                    echo"<p>$i es primo</p>";
                    //esto es para mostrar los que no son primos tambien
               /*  }else{
                    echo"<p>$i no es primo</p>"; */
                }
            }

        }
        
        
        
        
        
        
        
    ?>




    </form>
</body>
</html>