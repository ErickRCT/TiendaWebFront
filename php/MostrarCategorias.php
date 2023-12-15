<?php
require 'php/ListarCategoria.php';
require_once 'php/BD.php';
$categorias = new Database();
$listaCategorias = $categorias->selectCategoria();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Tecnologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Estilos adicionales para los enlaces */
        .navbar-nav a {
            color: #007bff; 
            text-decoration: none; 
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        .navbar-nav a:hover {
            color: #0056b3; 
        }
    </style>
</head>
<body>
  
    <header>
        <!-- Barra de Navegación -->
        <nav class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <strong>Tienda de Tecnologia</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="AgregarProducto.php">Agregar Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AgregarCategoria.php">Agregar Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="php/ListarCategoria.php">Listar categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Productos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      </header>

      <main>

      
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <!--mostrar los productos-->
              <?php
              listarCategorias($listaCategorias);
              ?>
              

            </div>
          </div>
        </div>
      
      </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>