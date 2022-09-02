<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 13</title>
</head>
<body>
<fieldset>
        <h1>Problema 13</h1>
        <form action="index.php" method="post">
            <p><h5>Banquete</h5></p>
            <p>Cantidad de personas en el banquete: <input type="text" name="per"></p>                              
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $numper = $_POST["per"];
        if($numper>200 && $numper<=300){
            echo "El costo por persona para el banquete es de: $85.00";
        }else if($numper>300){
            echo "El costo por persona para el banquete es de: $75.00";
        }else{
            echo "El costo por persona para el banquete es de: $95.00";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>