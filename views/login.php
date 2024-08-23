<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login_register.css">
    <title>Login</title>
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
        <h2>Inicio de Sesión</h2>
        <form action="index.php?controller=login&action=login" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="contrasena" placeholder="Contraseña" id="login-password" required>
            <div>
                <input type="checkbox" id="show-login-password" onclick="togglePassword('login-password')">
                <label for="show-login-password">Mostrar contraseña</label>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="index.php?controller=register">Regístrate aquí</a></p>
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
