<?php
require_once 'Producto.php';
require_once 'BD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron los datos esperados
    if (isset($_POST['nombre_producto'])) {
        // Obtener y limpiar los datos del formulario
        $nombre_producto = htmlspecialchars($_POST['nombre_producto']);
        $descripcion = htmlspecialchars($_POST['descripcion']);
        $precio = htmlspecialchars($_POST['precio']);
        $foto = htmlspecialchars($_POST['foto']);

        $producto = new Producto($nombre_producto,$descripcion,$precio,$foto);
        $BD = new Database();
        $BD->insertProducto($producto);
        

        
    } else {
        // Si los datos esperados no están presentes
        echo "Error: Datos faltantes en el formulario";
    }
} else {
    // Si la solicitud no es de tipo POST
    echo "Error: Acceso inválido";
}
?>
