<?php
require_once 'Categoria.php';
require_once 'BD.php';


function mensajeExito() {
    echo "<p>Categoría registrada exitosamente</p>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron los datos esperados
    if (isset($_POST['nombre_categoria'])) {
        // Obtener y limpiar los datos del formulario
        $nombre_categoria = htmlspecialchars($_POST['nombre_categoria']);
        $foto = htmlspecialchars($_POST['foto']);
        
        $categoria = new Categoria($nombre_categoria,$foto);
        $BD = new Database();
        $BD->insertCategoria($categoria);
        mensajeExito();
        

        
    } else {
        // Si los datos esperados no están presentes
        echo "Error: Datos faltantes en el formulario";
    }
} else {
    // Si la solicitud no es de tipo POST
    echo "Error: Acceso inválido";
}
?>