<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/globalStyles.css">
    <title>Diccionario</title>
</head>

<body>
    <h1>Implementación dun dicionario de galego a inglés que conteña polo menos 50 palabras. Para xestionar esas palabras deberase usar un array asociativo. A páxina web deberá pedir unha palabra nun formulario. Ao enviar a palabra deberase mostrar a palabra en inglés que se corresponda coa palabra introducida en galego.
        A aplicación debe permitir compartir unha tradución, é dicir, se unha persoa envía a URL da palabra que está vendo a outra persoa, esa outra persoa, ao acceder á páxina web debe ver a páxina coa mesma palabra que está a ver a primeira persoa.
        A aplicación non pode fallar se introducimos unha palabra en galego que non exista, hai que avisar ao usuario de que esa palabra aínda non está no dicionario.
    </h1>

    <form action="diccionario.php">
        <label for="Introduce una palabra">Introduce una palabra</label>
        <input type="text" name="palabra" value=<?php echo $_GET["palabra"] ?? ""; ?>>
        <input type="submit" name="Enviar">
    </form>

    <?php

    if (isset($_GET["palabra"])) {
       $palabraTraducir = strtolower($_GET["palabra"]);
       

        $arrayPalbras = array(
            "auga" => "water",
            "fogo" => "fire",
            "vento" => "wind",
            "terra" => "earth",
            "aire" => "air",
            "árbore" => "tree",
            "flor" => "flower",
            "mar" => "sea",
            "sol" => "sun",
            "lúa" => "moon",
            "estrela" => "star",
            "nube" => "cloud",
            "céu" => "sky",
            "neve" => "snow",
            "chuvia" => "rain",
            "río" => "river",
            "montaña" => "mountain",
            "val" => "valley",
            "illa" => "island",
            "praia" => "beach",
            "pedra" => "stone",
            "area" => "sand",
            "bosque" => "forest",
            "campo" => "field",
            "fraga" => "grove",
            "lago" => "lake",
            "coello" => "rabbit",
            "raposo" => "fox",
            "lobo" => "wolf",
            "oso" => "bear",
            "vaca" => "cow",
            "cabalo" => "horse",
            "paxaro" => "bird",
            "peixe" => "fish",
            "polbo" => "octopus",
            "merlo" => "blackbird",
            "gaviota" => "seagull",
            "escorpión" => "scorpion",
            "camiño" => "path",
            "ponte" => "bridge",
            "aldea" => "village",
            "casa" => "house",
            "igrexa" => "church",
            "pazo" => "mansion",
            "torre" => "tower",
            "castelo" => "castle",
            "muíño" => "mill",
            "escola" => "school",
            "rúa" => "street",
            "praza" => "square",
            "can" => "dog"
        );

        if(array_key_exists($palabraTraducir, $arrayPalbras)){
            $palabraTraducida = $arrayPalbras[$palabraTraducir];
            echo"La palabra traducida es: " . $palabraTraducida ;
        }else{
            echo "La palabra que quieres traducir no existe";
        }

    }




    ?>
</body>

</html>