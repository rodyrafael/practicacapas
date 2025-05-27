<?php
require '../logica/LProveedor.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prov = new Proveedor();
    $prov->setNombre($_POST['nombre']);
    $prov->setRuc($_POST['ruc']);
    $log = new LProveedor();
    $log->guardar($prov);
    header('Location: cargarproveedor.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Proveedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Agregar Nuevo Proveedor</h4>
            </div>
            <div class="card-body">
                <form method="post" action="guardarproveedor.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="ruc" class="form-label">RUC</label>
                        <input type="text" class="form-control" id="ruc" name="ruc" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="cargarproveedor.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>