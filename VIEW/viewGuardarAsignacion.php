<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Proyecto a Cliente</title>
</head>
<body>
    <h2>Formulario de Asignación</h2>
    <hr>

    <form action="index.php?accion=guardar_asignacion" method="post">
        <label>Proyecto:</label>
        <select name="cbxProyecto" required>
            <option value="">-- Seleccione Proyecto --</option>
            <?php foreach($proyectos as $p): ?>
                <option value="<?= $p->getIdProyecto() ?>">
                    <?= $p->getNombre() ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label>Cliente:</label>
        <select name="cbxCliente" required>
            <option value="">-- Seleccione Cliente --</option>
            <?php foreach($clientes as $c): ?>
                <option value="<?= $c->getIdCliente() ?>">
                    <?= $c->getNombres() . " " . $c->getApellidos() ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label>Fecha de asignación:</label>
        <input type="date" name="txtFecha" value="<?= date('Y-m-d') ?>" required>
        <br><br>

        <input type="submit" value="Guardar Asignación">
    </form>
</body>
</html>
