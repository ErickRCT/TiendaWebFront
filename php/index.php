<?php
require 'ListarProducto.php';
require_once 'BD.php';
$productos = new Database();
$listaProductos = $productos->selectProductos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>
<body>
    <div class="container-fluid contenedor-principal">
        <div class="container">
            <header class="row cabecera">
                <div class="col-2">
                    <img class="img" width="100" height="100" src="../img/logo/3.png" alt="logo">
                    
                </div>
                <div class="col-4 align-self-center">
                    <form action="" class="d-flex" role="search">
                        <input class="form-control me=2" type="text">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-3 align-self-center">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link color-letras" href="#">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link color-letras" href="#">Computadores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link color-letras" href="#">Perifericos</a>
                          </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-2 align-self-center">
                    <div class="row">
                        <div class="col-3 "><i class="bi bi-facebook color-letras"></i></div>
                        <div class="col-3"><i class="bi bi-instagram color-letras"></i></div>
                        <div class="col-3"><i class="bi bi-whatsapp color-letras"></i></div>
                        <div class="col-3"><i class="bi bi-youtube color-letras"></i></div>
                    </div>
                </div>
            </header>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 color-fondo-filtros filtros">
                    <div class="row">
                        <p class="display-6 text-center color-letras">Filtros</p>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start color-letras">Resultados</div>
                        <div class="col-6 text-end color-letras">Borrar Filtros</div>
                    </div>
                    <div class="row">
                        <label class="form-label color-letras">Precio Oferta</label>
                        
                        <input type="range" class="form-range">
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Palabra Clave">
                    </div>
                    <div class="row">
                        <div class="accordion accordion-flush" id="temario">
                            <!-- Elemento 1-->
                                <div class="accordion-item">
                                 <h2 class="accordion-header" id="encabezado-1"> 
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#elemento-1"
                                            aria-expander="true"
                                            aria-controles="elemento-1"
        > 
                                            Categoria
                                        </button>
                                    </h2>
                                <div
                                    id="elemento-1"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="encabezado-1"
                                    data-bs-parent="#temario"
                                >
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Computadores
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Perifericos
                                            </label>
                                          </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex" style="height: 800;">
                        <div class="vr"></div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <p class="display-6 text-center color-letras">Productos</p>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($listaProductos as $producto) {
                            ?>
                            <div class="col-4 tarjeta-producto">
                                <div class="card" style="width: 18rem;">
                        <?php
                                echo '<img src="../'.$producto['foto'].'" class="card-img-top" alt="...">';
                        ?>
                                <div class="card-body">
                        <?php
                                    echo'<h5 class="card-title">'.$producto['nombre'].'</h5>';
                                    echo'<p class="card-text">'.$producto['descripcion'].'</p>';
                                    echo'<p class="card-text">$'.$producto['precio'].'</p>';
                        ?>
                                </div>

                                <div class="card-body">
                                <button type="button" class="btn btn-secondary">Comprar</button>
                                </div>
                                </div>
                                </div>   
                        <?php
                        }
                        ?>
                        
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>