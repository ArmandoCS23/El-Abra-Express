<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <title>El AbraExpress</title>
    <style>
        .carousel {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }

        .carousel img {
            width: 100%;
            display: none;
        }

        .carousel img.active {
            display: block;
        }
    </style>
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

    <div class="carousel">
        <img src="images/image1.jpg" class="active" alt="Imagen 1">
        <img src="images/image2.jpg" alt="Imagen 2">
        <img src="images/image3.jpg" alt="Imagen 3">
    </div>

    <script>
        const images = document.querySelectorAll('.carousel img');
        let currentIndex = 0;

        function showNextImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(showNextImage, 3000);
    </script>
</body>

</html>