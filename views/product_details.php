<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/product_details.css">
    <title>Detalles del Producto - El AbraExpress</title>
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

    <div class="product-details-container">
        <h1>Detalles del producto</h1>
        <h2><?php echo $product['nombre']; ?></h2>
        <p><?php echo $product['descripcion']; ?></p>

        <div class="quantity-selector">
            <button id="decrease">-</button>
            <input type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo $product['stock']; ?>">
            <button id="increase">+</button>
        </div>

        <p>Precio: $<span id="price"><?php echo $product['precio']; ?></span></p>

        <form action="index.php?controller=compra&action=mostrarFormularioCompra" method="POST">
            <input type="hidden" name="id_producto" value="<?php echo $product['id']; ?>">
            <input type="hidden" id="quantityHidden" name="cantidad" value="1">
            <button type="submit" class="buy-button">Comprar</button>
        </form>
    </div>

    <script>
        const pricePerUnit = <?php echo $product['precio']; ?>;
        const quantityInput = document.getElementById('quantity');
        const quantityHidden = document.getElementById('quantityHidden');
        const priceDisplay = document.getElementById('price');

        document.getElementById('decrease').addEventListener('click', () => {
            if (quantityInput.value > 1) {
                quantityInput.value--;
                quantityHidden.value = quantityInput.value;
                updatePrice();
            }
        });

        document.getElementById('increase').addEventListener('click', () => {
            if (quantityInput.value < <?php echo $product['stock']; ?>) {
                quantityInput.value++;
                quantityHidden.value = quantityInput.value;
                updatePrice();
            }
        });

        function updatePrice() {
            priceDisplay.innerText = (pricePerUnit * quantityInput.value).toFixed(2);
        }
    </script>
</body>

</html>