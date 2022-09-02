<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 19</title>
</head>
<body>
<h1>Problema 19</h1>
<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
                <tr>
                    <th scope="col" style="text-align:center">Numero</th>
                    <th scope="col" style="text-align:center">Encriptado</th>
                    <th scope="col" style="text-align:center">Ver</th>
                    <th scope="col" style="text-align:center">Ver Modal</th>
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
                    <td style="text-align:center"><a href="cifrado.php?num=<?php echo $i ?>"><button type="button" class="btn btn-primary" style="text-align:center">Boton</button></a></td>
                    <th scope="row" style="text-align:center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                            Ver
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php 
                                                echo "$hash es el cifrado de $i";
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php?>
                </tr>
                <?php }?>
            </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>