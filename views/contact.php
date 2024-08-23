<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/contacto.css">
    <title>Contacto</title>
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

    <div class="contact-container">
        <h1>Contacto</h1>
        <p class="central-message">Si tienes alguna duda, ¡contáctanos!</p>
        <p>Email: <span id="contact-email">josenery010572@gmail.com</span></p>
        <p>Teléfono: <span id="contact-phone">+52 775 104 0629</span></p>

        <div class="social-media">
            <p>Nuestras redes sociales</p>
            <a href="https://www.facebook.com/profile.php?id=61564136442704&mibextid=ZbWKwL" target="_blank">
                <img src="images/facebook.jpg" alt="Facebook" class="social-icon">
            </a>
            <a href="https://twitter.com/tu_usuario" target="_blank">
                <img src="images/twitter.jpg" alt="Twitter" class="social-icon">
            </a>
        </div>
    </div>
</body>

</html>