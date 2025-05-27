<?php
    require '../logica/LFamilia.php';
    $log = new LFamilia();
    $familias = $log->cargar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Familias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Listado de Familias</h4>
                <a href="guardarfamilia.php" class="btn btn-light btn-sm text-primary fw-bold">
                    + Agregar Familia
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($familias as $familia): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($familia->getNombre()); ?></td>
                                <td><?php echo htmlspecialchars($familia->getDescripcion()); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
