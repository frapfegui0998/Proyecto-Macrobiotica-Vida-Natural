

 <!DOCTYPE html>
 <html lang="en">

 <head>
   
   <title>Macro biotica &mdash; Vida Natural</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="flaticon.css">
   <link rel="stylesheet" href="magnific-popup.css">
   <link rel="stylesheet" href="jquery-ui.css">
   <link rel="stylesheet" href="owl.carousel.min.css">
   <link rel="stylesheet" href="owl.theme.default.min.css">
   <script src="https://kit.fontawesome.com/295839e1c0.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="aos.css">
   <link rel="stylesheet" href="style.css">
   </head>

 <body>


 <div class="dashboard">
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"> <span>Vida Natural</span></a></header>
            <nav class="dashboard-nav-list"><a href="Inicio.blade.php" class="dashboard-nav-item"><i class="fas fa-home"></i>
  Ir al inicio </a>
  <div class="dashboard-nav-dropdown"><a href="dashUsuarios.blade.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Usuarios </a></div>
  <div class="dashboard-nav-dropdown"><a href="dashInventario.blade.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Inventario </a>
  <div class="dashboard-nav-dropdown"><a href="dashCategoria.blade.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Categoria </a>
  <div class="dashboard-nav-dropdown"><a href="dashHistorial.blade.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Historial </a>
  <div class="dashboard-nav-dropdown"><a href="dashInforme.blade.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Informe </a>
  
  <div class="dashboard-nav-dropdown-menu"><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item">Images</a><a href="#" class="dashboard-nav-dropdown-item">Video</a></div>
  </div>

 
  <div class="nav-item-divider"></div>
  <a href="indexlogin.blade.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
  </nav>
         </div>
         <div class='dashboard-app'>
             <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
             <div class='dashboard-content'>
                 <div class='container'>
                     <div class='card'>
                         <div class='card-header'>
                             <h1>Inventario de Productos</h1>
                         </div>
                         <br>
                         <a href="agregarProducto.blade.php" class="btn btn-primary px-5 py-3" style="width: 20%; margin-left:40%; margin-top: 10px; margin-bottom: 10px;">Agregar</a>
                         <a href="EditarProducto.blade.php" class="btn btn-primary px-5 py-3" style="width: 20%; margin-left:40%; margin-top: 10px; margin-bottom: 10px;">Editar Producto</a>
                         <div class='card-body'>
                         
                         <div class="row">
                    <div class="col-md-12 margin-bottom-15">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID del Producto</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>ID de la categoria</th>
                                    <th>Precio</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th>Cantidad</th>                                    
                                    <th>Agregar Promoción</th>                                                                                        
                                    <th>Eliminar Promoción</th>
                                    <th>Eliminar Producto</th> <!-- Columna para el botón de agregar al carrito -->
                                </tr>
                            </thead>
                            <tbody>
                                    <!-- Iterar sobre los productos en el carrito y mostrar cada uno -->
                            <tr>
                                <td></td>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-primary" style=" heigth: 5%">Agregar Promoción</a></td>
                                <td><a href="#" class="btn btn-primary" style=" heigth: 5%">Elimnar Promoción</a></td>
                                <td><a href="#" class="btn btn-primary">Eliminar</a></td>
                            </tr>
                              
                            </tbody>
                        </table>

                    </div>
                </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="../View/js/dash.min.js"></script>


 </body>

 </html>