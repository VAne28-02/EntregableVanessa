<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proyecto</title>

</head>
<body>
    <div>
        <h1>Registro de Proyecto</h1>
        <hr>
        <form action="index.php?accion=guardarproyecto" method="post">
            <label>Ingrese el nombre:</label>
            <input type="text" name="txtNom" placeholder="Nombre" required>
            <br><br>
            <label>Introduce la descripcion:</label>
            <input type="text" name="txtDes" placeholder="Descripción" required>
            <br><br>
            <label>Inserte la fecha:</label>
            <input type="date" name="txtFecha" placeholder="Fecha" required>
            <br><br>

            <select name="cbxIdCli" id="cbxIdCli" required>
                <option value="">- Seleccione Cliente--</option>
                <?php foreach($clientes as $cli): ?>
                    <option value="<?= $cli->getIdCliente() ?>"> <?= $cli->getNombres() . ' ' . $cli->getApellidos() ?> </option>
                <?php endforeach; ?>
            </select><br><br>

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>