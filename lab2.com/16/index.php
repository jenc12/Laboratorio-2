<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 16</title>
</head>
<body>
    <fieldset>
        <h1>Problema 16</h1>
        <form action="index.php" method="post">
            <p><h5>Árbol</h5></p>
            <p>Por favor, inserte un numero: <input type="text" name="n"></p>       
            <p><input type="submit"></p>
        </form>        
    </fieldset>
    <?php
        $n = $_POST["n"];
        for($a = 1; $a <= $n; $a++){
            for($m=1;$m<=$a;$m++){
                echo " * ";
            }
            echo "<br>\n";            
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>