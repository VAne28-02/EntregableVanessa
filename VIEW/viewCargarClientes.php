<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <div>
        <?php include 'menu.php'; ?>

        <h1>Lista de Clientes</h1>
        <hr>
        
        <a href="index.php?accion=guardarcliente"><button>Crear nuevo</button></a>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dni</th>
                    <th>Borrar</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cli): ?>
                <tr>
                    <td><?= $cli->getIdCliente() ?></td>
                    <td><?= $cli->getNombres() ?></td>
                    <td><?= $cli->getApellidos() ?></td>
                    <td><?= $cli->getDni() ?></td>
                    <td><a href="index.php?accion=borrarcliente&idcli=<?= $cli->getIdCliente() ?>">Borrar</a></td>
                    <td><a href="index.php?accion=modificarcliente&idcli=<?= $cli->getIdCliente() ?>">Modificar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
