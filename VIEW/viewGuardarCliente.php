<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Clientes</h1>
        <hr>
        <form action="index.php?accion=guardarcliente" method="post">
            <label>Ingrese Nombres:</label>
            <input type="text" name="txtNom" placeHolder="Nombres">
            <br><br>
            <label>Ingrese Apellidos:</label>
            <input type="text" name="txtApe"placeHolder="Apellidos">
            <br><br>
            <label>Ingrese N° DNI:</label>
            <input type="text" name="txtDni" placeHolder="Dni">
            <br><br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>