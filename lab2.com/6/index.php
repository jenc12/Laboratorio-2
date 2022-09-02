<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 6</title>
</head>
<body>
<fieldset>
        <h1>Problema 6</h1>
        <form action="index.php" method="post">
            <p>Nombre del estudiante: <input type="text" name="nombre"></p>
            <p>Nota 1: <input type="text" name="N1"></p>
            <p>Nota 2: <input type="text" name="N2"></p>
            <p>Nota 3: <input type="text" name="N3"></p>
            <p>Nota examen final: <input type="text" name="N4"></p>
            <p>Nota trabajo final: <input type="text" name="N5"></p>
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
        if($_POST){
            $nombre = $_POST["nombre"];
            $n1 = $_POST["N1"];
            $n2 = $_POST["N2"];
            $n3 = $_POST["N3"];
            $n4 = $_POST["N4"];
            $n5 = $_POST["N5"];
            if($n1<0||$n1>100){
                echo "El valor de la nota 1 no es válido";
            }else if($n2<0||$n2>100){
                echo "El valor de la nota 2 no es válido";
            }else if($n3<0||$n3>100){
                echo "El valor de la nota 3 no es válido";
            }else if($n4<0||$n4>100){
                echo "El valor de la nota 4 no es válido";
            }else if($n5<0||$n5>100){
                echo "El valor de la nota 5 no es válido";
            }else{
                $prom1 = ((($n1+$n2+$n3)/3)*.55);
                $prom2 = (($n4)*.30);
                $prom3 = (($n5)*.15);
                $promfin = $prom1+$prom2+$prom3;

                echo "El promedio final del estudiante es: ".$promfin."<br>";
                if ($promfin>=61){
                    echo "El estudiante $nombre paso la materia con un promedio de: $promfin";
                }else{
                    echo "El estudiante $nombre perdio la materia con un promedio de: $promfin";
                }
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>