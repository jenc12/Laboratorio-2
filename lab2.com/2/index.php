<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Operaciones Aritméticas</title>
</head>
<body>
    <h1>Problema 2</h1>
        <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $suma = $n1 + $n2;
        $resta = $n1 + $n2;
        $mult = $n1 * $n2;
        $divi = $n1 / $n2;
        echo "La suma de $n1 y $n2 es = $suma <hr>";
        echo "La resta de $n1 y $n2 es = $resta <hr>";
        echo "La multiplicación de $n1 por $n2 es = $mult <hr>";
        echo "La división de $n1 entre $n2 es = $divi <hr>"; 

        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>