<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/about.css">
    <title>El AbraExpress</title>
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

    <div class="about-container">
        <div class="image-container">
            <img src="images/about.jpg" alt="Imagen descriptiva">
        </div>
        <div class="text-container">
            <h2>¿Quiénes somos?</h2>
            <p>
                El aserradero "El Abra" es una empresa dedicada a la fabricación de tarimas y embalajes de madera, orientada tanto al mercado nacional como al internacional. Comprometida con la excelencia en calidad y servicio, la empresa se esfuerza por satisfacer las necesidades de sus clientes, ofreciendo productos que cumplen con los más altos estándares de calidad.

                Con una visión de convertirse en un referente confiable en el sector de embalajes, "El Abra" se enfoca en la innovación, eficiencia y flexibilidad en sus operaciones. La empresa se rige por un fuerte compromiso con las normas gubernamentales y medioambientales, promoviendo prácticas sostenibles que minimizan su impacto ecológico. Impulsada por el talento y dedicación de su equipo, "El Abra" busca no solo alcanzar, sino superar la rentabilidad deseada, consolidándose como un líder en el mercado de embalajes de madera.
            </p>
        </div>
    </div>
    <div class="map-container">
        <h3>Encuéntranos en:</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3127.0054535026384!2d-98.32870121285833!3d20.11098273925616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2smx!4v1724446619966!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>

</html>