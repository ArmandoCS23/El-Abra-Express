<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php?controller=login"); // Redirige al usuario al inicio de sesión si no está autenticado
    exit();
}

// Puedes obtener más detalles de la compra de la sesión si es necesario
$nombre_usuario = $_SESSION['nombre_usuario'] ?? 'Usuario';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/confirmacion.css">
    <title>Confirmación de Compra - El AbraExpress</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo">
        </div>
        <h1>El AbraExpress</h1>
        <div class="settings">
            <button onclick="window.location.href='index.php?controller=settings'">⚙️</button>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php?controller=menu">Inicio</a></li>
            <li><a href="index.php?controller=catalogo">Catálogo</a></li>
            <li><a href="index.php?controller=contact">Contacto</a></li>
            <li><a href="index.php?controller=about">¿Quiénes somos?</a></li>
        </ul>
    </nav>

    <div class="confirmacion-container">
        <h2>¡Gracias por tu compra, <?php echo htmlspecialchars($nombre_usuario); ?>!</h2>
        <p>Tu compra ha sido procesada con éxito.</p>
        <p>Pronto recibirás un correo con los detalles de tu pedido.</p>
        <a href="index.php?controller=catalogo" class="btn">Volver al Catálogo</a>
    </div>
</body>

</html>