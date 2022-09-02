<!doctype html>
<html lang="en">
<style>
table, th, td {
  border:1px solid black;
}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 9</title>
</head>
<body>
<fieldset>
        <h1>Problema 9</h1>
        <form action="index.php" method="post">
            <p>¿Cuántos estudiantes hay en el salón de clases?: <input type="text" name="estudiantes"></p>
            <p>Alumnas: <input type="text" name="girls"></p>
            <p>Alumnos: <input type="text" name="boys"></p>            
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $cantidad = $_POST["estudiantes"];
        $ninos = $_POST["boys"];
        $ninas = $_POST["girls"];
        $resultadoninos = $ninos/$cantidad;
        $resultadoninas = $ninas/$cantidad;  
        echo "<table border:2px solid black>";
        echo "<tr>";
        echo "<td>Estudiantes</td>";
        echo "<td>Alumnas</td>";
        echo "<td>Alumnos</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>%</td>";
        echo "<td>$resultadoninas</td>";
        echo "<td>$resultadoninos</td>";
        echo "</tr>";
        echo "</table>";                     
    }
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>