<?php

function listarProductos($listaProductos){
    foreach ($listaProductos as $producto) {
        echo'<div class="col">';
        echo'<div class="card shadow-sm">';
        echo'<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Imagen" preserveAspectRatio="xMidYMid slice" focusable="false">';
        echo'<title>Imagen</title>';
        echo'<image href="'.$producto['foto'].'" width="100%" height="100%" />';
        echo'</svg>';
              
    
          echo'<div class="card-body">';
            echo'<p>$'.$producto['precio'].'</p>';
            echo'<p class="card-text">'.$producto['descripcion'].'</p>';
            echo'<div class="d-flex justify-content-between align-items-center">';
              echo'<div class="btn-group">';
                echo'<button type="button" class="btn btn-sm btn-outline-secondary">Agregar al Carrito</button>';
                echo'<button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>';
              echo'</div>';
              
            echo'</div>';
          echo'</div>';
        echo'</div>';
      echo'</div>';
    }
}
?>