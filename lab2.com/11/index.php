<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 11</title>
</head>
<body>
    <fieldset>
        <h1>Problema 11</h1>
        <form action="index.php" method="post">
            <p>Por favor, introduzca los centímetros</p>
            <p>Centímetros: <input type="text" name="centi"></p>
                              
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $c = $_POST["centi"];
        $p = $c * .39737;
        echo "Los ".$c. " centímetros convertidos en pulgadas da como resultado: ".$p." pulgadas";
    }
       
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>