<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/compra_form.css">
    <title>Realizar Compra - El AbraExpress</title>
</head>
<body>
    <div class="container">
        <h1>Confirmar Compra</h1>
        <div class="product-details">
            <h2>
                <?php 
                echo isset($product['nombre']) ? htmlspecialchars($product['nombre']) : 'Producto no disponible'; 
                ?>
            </h2>
            <p><strong>Cantidad:</strong> <?php echo htmlspecialchars($_POST['cantidad']); ?></p>
            <p><strong>Precio total:</strong> $<?php 
                echo isset($product['precio']) ? number_format($product['precio'] * $_POST['cantidad'], 2) : '0.00'; 
            ?></p>
        </div>
        <form action="index.php?controller=compra&action=procesarCompra" method="POST">
            <input type="hidden" name="id_producto" value="<?php echo htmlspecialchars($_POST['id_producto']); ?>">
            <input type="hidden" name="cantidad" value="<?php echo htmlspecialchars($_POST['cantidad']); ?>">

            <label for="metodo_pago">Método de Pago:</label>
            <select id="metodo_pago" name="metodo_pago" required>
                <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia">Transferencia Bancaria</option>
            </select>

            <button type="submit">Confirmar Compra</button>
        </form>
    </div>
</body>
</html>