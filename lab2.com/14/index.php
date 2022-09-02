<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 14</title>
</head>
<body>
<fieldset>
        <h1>Problema 14</h1>
        <form action="index.php" method="post">
            <p>Por favor, introduzca cuantos años tiene en la tienda</p>
            <p>Años: <input type="text" name="a"></p>
                              
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $a = $_POST["a"];
        if($a==1){
            echo "El bono que le corresponde es de: $100";
        }else if($a==2){
            echo "El bono que le corresponde es de: $200";
        }else if($a==3){
            echo "El bono que le corresponde es de: $300";   
        }else if($a==4){
            echo "El bono que le corresponde es de: $400";
        }else if($a==5){
            echo "El bono que le corresponde es de: $500";
        }else{
            echo "El bono que le corresponde es de: $1000";
        }    
            
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>