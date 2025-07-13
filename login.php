<?php
// LOGIN SYSTEM BÁSICO
session_start();

require_once './CONFIG/DB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $cn = DB::conectar();
    $sql = "SELECT * FROM usuarios WHERE usuario = :usu AND clave = :cla";
    $ps = $cn->prepare($sql);
    $ps->bindParam(':usu', $usuario);
    $ps->bindParam(':cla', $clave); // En producción, usa hash (password_hash)
    $ps->execute();
    $user = $ps->fetch();

    if ($user) {
        $_SESSION['usuario'] = $user['usuario'];
        header('Location: index.php');
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!-- LOGIN VIEW -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
        <h1>Iniciar Sesión</h1>
        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="password" name="clave" placeholder="Clave" required><br>
            <input type="submit" value="Ingresar">
        </form>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
