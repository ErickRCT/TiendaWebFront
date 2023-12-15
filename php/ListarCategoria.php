<?php

function listarCategorias($listaCategorias){
    foreach ($listaCategorias as $categoria) {
        echo'<div class="col">';
        echo'<div class="card shadow-sm">';
        echo'<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Imagen" preserveAspectRatio="xMidYMid slice" focusable="false">';
        echo'<title>Imagen</title>';
        echo'<image href="'.$categoria['foto'].'" width="100%" height="100%" />';
        echo'</svg>';
              
    
          echo'<div class="card-body">';
            echo'<p>'.$categoria['nombre_categoria'].'</p>';
            echo'<div class="d-flex justify-content-between align-items-center">'; 
            echo'</div>';
          echo'</div>';
    }
}
?>