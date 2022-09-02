<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 10</title>
</head>
<body>
    <fieldset>
        <h1>Problema 10</h1>
        <form action="index.php" method="post">
            <p>Por favor, rellene con 0 los espacios que desea dejar en blanco</p>
            <p>Horas: <input type="text" name="hour"></p>
            <p>Minuto: <input type="text" name="minute"></p>
            <p>Segundo: <input type="text" name="second"></p>       
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
        if($_POST){
            $h = $_POST["hour"];
            $m = $_POST["minute"];
            $s = $_POST["second"];
            $totalh = $h * 3600;
            $totalm = $m * 60;
            $totals = $s * 1;
            $totalt = ($totalh+$totalm+$totals)*.25;
            echo "El total a pagar por el tiempo que se trabajó es de: ".$totalt."";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>