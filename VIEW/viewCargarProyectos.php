<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>

</head>
<body>
    <div>
        <?php include 'menu.php'; ?>

        <h1>Lista de Proyectos</h1>
        <hr>
        <br>

        <a href="index.php?accion=guardarproyecto"><button>Crear Proyecto</button></a>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Id Cliente</th>
                    <th>Borrar</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $pro): ?>
                <tr>
                    <td><?= $pro->getIdProyecto() ?></td>
                    <td><?= $pro->getNombre() ?></td>
                    <td><?= $pro->getDescripcion() ?></td>
                    <td><?=$pro->getFecha()?></td>
                    <td><?= $pro->getIdCliente() ?></td>
                    <td><a href="index.php?accion=borrarproyecto&idpro=<?= $pro->getIdProyecto() ?>">Borrar</a></td>
                    <td><a href="index.php?accion=modificarproyecto&idpro=<?= $pro->getIdProyecto() ?>">Modificar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>