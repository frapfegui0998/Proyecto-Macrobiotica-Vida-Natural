<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio de Sesión - Macrobiótica</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .login-container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 300px;
    text-align: center;
  }

  .logo {
    width: 100px;
    height: 100px;
    margin: 0 auto 20px;
    border-radius: 50%;
    overflow: hidden;
  }

  .logo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    background-color: #1e6c38;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px; /* Espacio superior */
    margin-bottom: 10px; /* Espacio inferior */
  }

  button:hover {
    background-color: #d32f2f;
  }
</style>
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="images/logo.jpg" alt="Logo Macrobiótica">
    </div>
    <form>
      <input type="text" placeholder="Correo" required>
      <input type="password" placeholder="Contraseña" required>
      <div class="button-container">
        <a href="inicio.blade.php"><button type="button">Iniciar Sesión</button></a>
        <a href="dashUsuarios.blade.php"><button type="button">Administrador</button></a>
        <a href="recuperarContra.blade.php"><button type="button">Recuperar Contraseña</button></a>
      </div>
    </form>
    <div class="button-container">
      <a href="registrarse.blade.php"><button type="button">Registrarse</button></a>
    </div>
  </div>
</body>
</html>