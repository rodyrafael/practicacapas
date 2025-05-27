<?php
require '../logica/LCliente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cli = new Cliente();
    $cli->setNombre($_POST['nombre']);
    $cli->setApellidos($_POST['apellido']);
    $cli->setDni($_POST['dni']);
    $cli->setCelular($_POST['celular']);
    $cli->setDireccion($_POST['direccion']);
    $log = new LCliente();
    $log->guardar($cli);
    header('Location: cargarcliente.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Agregar Nuevo Cliente</h4>
            </div>
            <div class="card-body">
                <form method="post" action="guardarcliente.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="cargarcliente.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>