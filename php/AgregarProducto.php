<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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






    <div class="container">
        <h1 class="mt-5">Registrar Producto</h1>

        <form action="php/ProcesarProducto.php" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="mb-3">
                <label for="nombre_producto" class="form-label">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Ruta de la Foto:</label>
                <input type="text" class="form-control" id="foto" name="foto" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
