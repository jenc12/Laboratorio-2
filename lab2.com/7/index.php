<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 7</title>
</head>
<body>
<fieldset>
        <h1>Problema 7</h1>
        <form action="index.php" method="post">
            <p>Introduzca el presupuesto del hospital: <input type="text" name="pres"></p>            
            <p><input type="submit"></p>
        </form>
        <?php
        if($_POST){
            $pres = $_POST["pres"];
            $gine = $pres * .4;
            $trau = $pres * .3;
            $pedi = $pres * .3;
            echo "El presupuesto de ginecología es de: ".$gine."$ <br>";
            echo "El presupuesto de traumatología es de: ".$trau."$ <br>";
            echo "El presupuesto de pediatría es de: ".$pedi."$ <br>";

        }
        ?>
    </fieldset>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>