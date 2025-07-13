<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Asignaciones</title>
</head>
<body>
    <h2>Listado de Asignaciones</h2>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>ID Asignación</th>
                <th>ID Proyecto</th>
                <th>ID Cliente</th>
                <th>Fecha Asignación</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($asignaciones as $a): ?>
            <tr>
                <td><?= $a['idasignacion'] ?></td>
                <td><?= $a['idproyecto'] ?></td>
                <td><?= $a['idcliente'] ?></td>
                <td><?= $a['fecha_asignacion'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <a href="index.php?accion=form_asignacion">Registrar nueva asignación</a>
</body>
</html>