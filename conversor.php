<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Conversor de Temperatura PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

        echo "<br> <br> <br> <center>";

        $op = $_POST["tipoTemp"];

        if($op == "1"){
            $cel = $_POST["temp"];
            $fah = round(9 * $cel / 5 + 32);
            echo "<h1> ". $cel. "ºC = " .$fah. "°F </h1> <br>";
        }else{
            echo "<h2> Converter Fahrenheit em Celsius! </h2>";
        }

        if($op == "2"){
            $fah = $_POST["temp"];
            $cel = round(($fah - 32) / 9 * 5);
            echo "<h1> ". $fah. "°F = " .$cel. "ºC </h1> <br>";
        }else{
            echo "<h2> Converter Celisius em Fahrenheit! </h2>";
        }

        echo "<br> <br> <br> </center>"

    ?>

        <a href="index.php"> <center> Voltar </center></a>

</body>
</html>