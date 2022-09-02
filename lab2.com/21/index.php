<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 21</title>
</head>
<body>
<h1>Problema 21</h1>
<table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
                <tr>
                    <th scope="col" style="text-align:center">Numero</th>
                    <th scope="col" style="text-align:center">Valor</th>
                    <th scope="col" style="text-align:center">Barras</th>

                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i<=10 ; $i++) {
                $ale = rand(0,100);
                $color="";
                if ($ale < 61)
                $color="secondary";
                elseif ($ale <=70)
                $color="danger";
                elseif ($ale <=80)
                $color="warning";
                elseif ($ale <=90)
                $color="info";
                else
                $color="success"
            ?>
                <tr>
                    <th scope="row" style="text-align:center"><?php echo $i ?> </th>
                    <th scope="row" style="text-align:center"><?php echo $ale ?></th>
                    <td>
                        <div class="progress">
                        <div class="progress-bar bg-<?php echo $color ?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $ale?>%;" aria-valuenow="<?php echo $ale?>" aria-valuemin="0" aria-valuemax="100"><?php echo $ale?>%</div>
                        </div>
                    </td>
                    <?php?>
                </tr>
                <?php }?>
            </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>