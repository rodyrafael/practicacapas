<?php
require '../logica/LCliente.php';
$log = new LCliente();
$clientes = $log->cargar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Listado de Clientes</h4>
                <a href="guardarcliente.php" class="btn btn-light btn-sm text-primary fw-bold">
                    + Agregar Cliente
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clientes as $cliente): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($cliente->getNombre()); ?></td>
                                <td><?php echo htmlspecialchars($cliente->getApellidos()); ?></td>
                                <td><?php echo htmlspecialchars($cliente->getDni()); ?></td>
                                <td><?php echo htmlspecialchars($cliente->getCelular()); ?></td>
                                <td><?php echo htmlspecialchars($cliente->getDireccion()); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>