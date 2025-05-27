<?php
    require '../logica/LProveedor.php';
    $log = new LProveedor();
    $proveedores = $log->cargar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Listado de Proveedores</h4>
                <a href="guardarproveedor.php" class="btn btn-light btn-sm text-primary fw-bold">
                    + Agregar Proveedor
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>RUC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($proveedores as $proveedor): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($proveedor->getNombre()); ?></td>
                                <td><?php echo htmlspecialchars($proveedor->getRuc()); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>