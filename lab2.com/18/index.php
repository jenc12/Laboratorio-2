<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 18</title>
</head>
<body>
<h1 style= "text-align:center">Problema 18</h1>
<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
                <tr>
                    <th scope="col" style="text-align:center">Numero</th>
                    <th scope="col" style="text-align:center">Encriptado</th>
                    <th scope="col" style="text-align:center">Boton</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i<=100 ; $i++) {?>
                <tr>
                    <th scope="row" style="text-align:center"><?php echo $i ?> </th>
                    <th scope="row" style="text-align:center"><?php 
                    $hash = md5($i);
                    echo $hash;
                    ?></th>
                    <td style="text-align:center"><a href="cifrado.php?num=<?php echo $i ?>"><button type="button" class="btn btn-primary" >Ver</button></a></td>
                </tr>
                <?php }?>
            </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>