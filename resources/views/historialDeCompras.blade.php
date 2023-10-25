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
  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Espacio entre filas */
  }

  th, td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ccc;
  }

  th {
    background-color: #f5f5f5;
  }

  .button-container {
    margin-top: 20px;
  }

  button {
    background-color: #1e6c38;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #d32f2f;
  }

  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

</style>
</head>
<body>
  <div class="history-container">
    <div class="logo">
      <img src="images/logo.jpg" alt="Logo Macrobiótica">
    </div>
    <h2>Mi Historial de Compras</h2>
    <table>
      <thead>
        <tr>
          <th>Producto</th>
          <th>Fecha de Compra</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Producto 1</td>
          <td>Fecha 1</td>
          <td>$19.99</td>
        </tr>
        <tr>
          <td>Producto 2</td>
          <td>Fecha 2</td>
          <td>$29.99</td>
        </tr>
        <!-- Agrega más filas para otros productos -->
      </tbody>
    </table>
    <div class="button-container">
      <a href="inicio.blade.php"><button type="button">Volver al Inicio</button></a>
    </div>
  </div>
</body>
</html>