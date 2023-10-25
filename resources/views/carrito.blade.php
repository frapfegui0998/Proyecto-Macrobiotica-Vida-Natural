

<!DOCTYPE html>
<html lang="en">

<head>
<title>Macro biotica &mdash; Vida Natural</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="flaticon.css">
<link rel="stylesheet" href="magnific-popup.css">
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="owl.carousel.min.css">
<link rel="stylesheet" href="owl.theme.default.min.css">
<script src="https://kit.fontawesome.com/295839e1c0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="aos.css">
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="style.css">
</head>


<body>

<div class="site-navbar py-2">
<div class="site-wrap">
<div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="inicio.blade.php" class="js-logo-clone"><class="text-primary">VIDA</strong>Natural</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active"><a href="inicio.blade.php">Inicio</a></li>
                        <li><a href="shop.blade.php">Tienda</a></li>
                        <li><a href="contact.blade.php">Contacto Empresarial</a></li>
                        <li><a href="CuentaUsuario.blade.php">Cuenta</a></li>
                        <li><a href="historialDeCompras.blade.php">Historial de Compra</a></li>
                        <li><a href="carrito.blade.php"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
  </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h3>Productos en el Carrito</h3>
            </div>
            <div class="site-section bg-light">
                <div class="container">
                    <!-- Aquí mostrarás la lista de productos en el carrito -->
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Itera aquí sobre los productos en el carrito y muestra cada uno -->
                            <tr>
                                <td>Producto 1</td>
                                <td>$19.99</td>
                                <td>2</td>
                                <td>$39.98</td>
                                
                                <td><a href="shop.blade.php" class="btn btn-primary">Eliminar de Carrito</a></td>
                                
                            </tr>
                            <tr>
                                <td>Producto 2</td>
                                <td>$29.99</td>
                                <td>1</td>
                                <td>$29.99</td>
                                
                                <td><a href="shop.blade.php" class="btn btn-primary">Eliminar de Carrito</a></td>    
                                
                            </tr>
                            <td><a href="shop.blade.php" class="btn btn-primary">Realizar Pedido</a></td>
                            <!-- Agrega más filas para otros productos en el carrito -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a name="about"></a>
        <div class="block-7">
          <h3 class="footer-heading mb-4">Sobre <strong class="text-primary">Macrobiotica</strong></h3>
          <p>Somos un emprendimiento familiar con un gran futuro y mejoras constantes.</p>
        </div>
      </div>
      <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
        <h3 class="footer-heading mb-4">Navegación</h3>
        <ul class="list-unstyled">
          <li><a href="inicio.blade.php">Inicio</a></li>
          <li><a href="shop.blade.php">Tienda</a></li>
          <li><a href="contact.blade.php">Contacto Empresarial</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Información para contacto </h3>
          <ul class="list-unstyled">
            <li class="address">Tejar, El Guarco, Costa Rica</li>
            <li class="phone"><a href="tel://8697 5160">
                +506 8697 5160</a></li>
            <li class="email">macrovidanaturalcr@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made
          with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
          <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>

    </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>

<?php 
   
    ?>



</body>

</html>