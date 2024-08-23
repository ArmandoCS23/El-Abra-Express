<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login_register.css">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/background.jpg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registro</h2>
        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
            <p class="success-message">Cuenta creada</p>
        <?php endif; ?>
        <form action="index.php?controller=register&action=register" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="telefono" placeholder="Teléfono" required>
            <input type="password" name="contrasena" placeholder="Contraseña" id="register-password" required>
            <input type="password" name="confirmar_contrasena" placeholder="Confirmar Contraseña" id="confirmar-password" required>
            <div>
                <input type="checkbox" id="show-register-password" onclick="togglePassword('register-password')">
                <label for="show-register-password">Mostrar contraseña</label>
            </div>
            <div>
                <input type="checkbox" id="show-confirm-password" onclick="togglePassword('confirmar-password')">
                <label for="show-confirm-password">Mostrar confirmar contraseña</label>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php?controller=login">Inicia sesión aquí</a></p>
    </div>
    <script>
        function togglePassword(passwordId) {
            var passwordInput = document.getElementById(passwordId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>
