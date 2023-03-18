<?php
    include "header.php";
    include "includes/dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Inventario</h2>
        <a class="btn btn-primary" href="crear.php">Agregar Nuevo Producto</a>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM productos";
                $result = $con->query($sql);
                if(!$result){
                    die("Invalid query: ". $con->error);
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='editar.php?id=$row[id]'>Editar</a>
                        <a class='btn btn-danger btn-sm' href='eliminar.php?id=$row[id]'>Eliminar</a>
                        <a class='btn btn-warning btn-sm' href='agregarCarro.php?id=$row[id]'>Agregar al Carro</a>
                    </td>
                    </tr>";
                }
            ?>
            </tbody>
        </table>

    </div>
<!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <?php
                include "includes/crear.inc.php";
            ?>
            <div class="container my-2">
                <h2>Nuevo Producto</h2>
                <form method="post">

                <?php
                    if(!empty($errorMessage)){
                        echo "
                        <div class='alert alert-warning alert-dismissible fade show' role='aler'>
                            <strong>$errorMessage</strong>
                            <button type='button' class='btn btn-close' date-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        ";
                    }
                ?>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-laber">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-laber">Email</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-laber">Phone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-laber">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                    </div>
                </div>

                <?php
                    if(!empty($successMessage)){
                        echo "
                        <div class='alert alert-warning alert-dismissible fade show' role='aler'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn btn-close' date-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        ";
                    }
                ?>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button class="btn btn-primary" >Submit</button>
                    </div>
                    <div class="col-sm-3">
                        <a class="btn btn-outline-primary" href="inventario.php">Cancelar</a>
                    </div>
                </div>

                </form>
            </div>

            </div>
        </div>
    </div>
</div> -->

</body>
</html>