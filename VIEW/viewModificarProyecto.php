<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Proyecto</title>
</head>
<body>
    <div>
        <h1>Modificar Proyecto</h1>
        <hr>
        <form action="index.php?accion=modificarproyecto" method="post">
            <input type="hidden" name="txtId" value="<?= $proyecto->getIdProyecto() ?>" required>
            <label>Nombre del Proyecto:</label>
            <input type="text" name="txtNom" placeholder="Nombre" value="<?= $proyecto->getNombre() ?>">
            <br><br>
            <label>Descripcion:</label>
            <input type="text" name="txtDes" placeholder="Descripción" value="<?= $proyecto->getDescripcion() ?>" required>
            <br><br>
            <label>Fecha:</label>
            <input type="date" name="txtfecha" placeholder="Fecha"value="<?=$proyecto->getFecha()?>" required>
            <br><br>
            <label>Selecciona al cliente</label>
            <select name="cbxIdCli">
                <option value="">--Seleccione Cliente--</option>
                <?php foreach ($clientes as $cli): ?>
                    <option value="<?= $cli->getIdCliente() ?>" <?= ($cli->getIdCliente() == $proyecto->getIdCliente()) ? 'selected' : '' ?>>
                        <?= $cli->getNombres() . ' ' . $cli->getApellidos() ?>
                    </option>
                <?php endforeach; ?>
            </select><br>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>
