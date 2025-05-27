<?php
    require '../logica/LFamilia.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fam = new Familia();
        $fam->setNombre($_POST['nombre']);
        $fam->setDescripcion($_POST['descripcion']);
        $log = new LFamilia();
        $log->guardar($fam);
        header('Location: cargarfamilias.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Familia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Agregar Nueva Familia</h4>
            </div>
            <div class="card-body">
                <form method="post" action="guardarfamilia.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="cargarfamilias.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>