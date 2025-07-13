<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
</head>
<body>
    <div>
        <h1>Modificar Cliente</h1>
        <hr>
        <form action="index.php?accion=modificarcliente" method="post">
            <input type="hidden" name="txtId" value="<?= $cliente->getIdCliente() ?>">
            <label>Nombres:</label>
            <input type="text" name="txtNom" placeholder="Nombres" value="<?= $cliente->getNombres() ?>">
            <br><br>
            <label>Apellidos:</label>
            <input type="text" name="txtApe" placeholder="Apellidos" value="<?= $cliente->getApellidos() ?>">
            <br><br>
            <label>Dni:</label>
            <input type="text" name="txtDni" placeholder="Dni" value="<?= $cliente->getDni() ?>">
            <br><br>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>
