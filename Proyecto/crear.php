<?php
include "includes/crear.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
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
            <label class="col-sm-3 col-form-laber">SAP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="sap" value="<?php echo $sap; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Nombre</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Tipo</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="tipo" value="<?php echo $tipo; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">UXC</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="uxc" value="<?php echo $uxc; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Vol</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="vol" value="<?php echo $vol; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Precio Caja</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="precioCaja" value="<?php echo $precioCaja; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Precio Unidad</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="precioUnidad" value="<?php echo $precioUnidad; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-laber">Img</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" name="img" value="<?php echo $img; ?>">
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
                <button class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="inventario.php">Cancelar</a>
            </div>
        </div>

        </form>
    </div>
</body>
</html>