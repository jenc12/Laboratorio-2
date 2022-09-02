<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 12</title>
</head>
<body>
<fieldset>
        <h1>Problema 12</h1>
        <form action="index.php" method="post">
            <p>Por favor, introduzca los kilos a calcular</p>
            <p>Kilos: <input type="text" name="kilos"></p>
                              
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $k = $_POST["kilos"];
        $l = $k * 2.2046;
        echo "La conversión de ".$k. " kilos a libras, da como resultado: ".$l." libras.";
    }
       
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>