<?php
    require '../logica/LCategoria.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cat = new Categoria();
        $cat->setNombre($_POST['nombre']);
        $cat->setIdFamilia($_POST['idfamilia']);
        $log = new LCategoria();
        $log->guardar($cat);
        header('Location: cargarcategoria.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Agregar Nueva Categoría</h4>
            </div>
            <div class="card-body">
                <form method="post" action="guardarcategoria.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="idfamilia" class="form-label">ID Familia</label>
                        <input type="number" class="form-control" id="idfamilia" name="idfamilia" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="cargarcategoria.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>