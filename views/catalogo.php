<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/catalogo.css">
    <title>Catálogo - El AbraExpress</title>
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

    <div class="catalogo-container">
        <?php foreach ($products as $product): ?>
            <div class="catalogo-item">
                <a href="index.php?controller=product&action=details&id=<?php echo $product['id']; ?>">
                    <img src="images/products/<?php echo $product['imagen']; ?>" alt="<?php echo $product['nombre']; ?>" style="max-width: 150px; height: auto;">
                    <h2><?php echo $product['nombre']; ?></h2>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
