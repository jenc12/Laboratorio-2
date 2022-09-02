<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 15</title>
</head>
<body>
    <fieldset>
        <h1>Problema 15</h1>
        <form action="index.php" method="post">
            <p><h5>Pueblo desconocido</h5></p>
            <p>Limite de credito: <input type="text" name="limit"></p>
            <p>Tipo de tarjeta: <input type="text" name="tarjeta"></p>      
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php 
    if($_POST){
        $limite = $_POST["limit"];
        $tipo = $_POST["tarjeta"];
        if($tipo==1){
            $nuevolimit = ($limite * 0.25) + $limite;
            echo "El nuevo límite de su tarjeta de crédito tipo #1 es de: $$nuevolimit.";
        }elseif($tipo==2) {
            $nuevolimit = ($limite * 0.35) + $limite;
            echo "El nuevo límite de su tarjeta de crédito tipo #2 es de: $$nuevolimit.";
        }elseif($tipo==3) {
            $nuevolimit = ($limite * 0.40) + $limite;
            echo "El nuevo límite de su tarjeta de crédito tipo #3 es de: $$nuevolimit.";
        }elseif($tipo>4) {
            $nuevolimit = ($limite * 0.50) + $limite;
            echo "El nuevo límite de su tarjeta de crédito tipo $tipo es de: $$nuevolimit.";
    }else
            echo "Lo sentimos, por favor ingrese los datos de forma correcta.";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>