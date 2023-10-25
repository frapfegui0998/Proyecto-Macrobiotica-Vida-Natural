
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
  <a href="../../index.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
  </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>

                    <div style="text-align: left">
                        
                    </div>

                    <div class='card'>



                        <div class='card-header'>

                            



                            <h1>Agregar Usuario</h1>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class='card-body'>

                                <div class="row">

                                    <div class="col-md-4 margin-bottom-15">
                                        <label for="lblNombre" class="control-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                                    </div>
                                    <div class="row">
                                        <div class="col-6 .col-md-4">
                                            <label for="lblNombre" class="control-label">Correo</label>
                                            <input type="text" style="width: 90%;" class="form-control" id="txtPrecio" name="txtPrecio">


                                        </div>


                                    </div>

                                    


                                

                                <br>
                                <input type="submit" class="btn btn-info" value="Procesar" id="btnAgregar" name="btnAgregar" style="width:110px">
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>