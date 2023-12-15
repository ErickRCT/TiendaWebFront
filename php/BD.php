
<?php
class Database {
    private $servername = "localhost"; // nombre servidor
    private $username = "root"; // usuario base de datos
    private $password = ""; // contaseña
    private $dbname = "MIPROYECTO"; // nombre base de datos
    private $conn;//variable que almacenara la conexion

    public function __construct() {
        // Crear conexión
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Comprobar conexión
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        } 
    }
    public function insertProducto($producto) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $cadena = $producto->toStringg();
        $sql="INSERT INTO productos (nombre, descripcion, precio, foto) VALUES (".$cadena.")";
        $result = mysqli_query($conn,$sql);
        print_r ($result);
    }

    public function insertCategoria($categoria) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $cadena = $categoria->toStringg();
        $sql="INSERT INTO categorias (nombre_categoria,foto) VALUES (".$cadena.")";
        $result = mysqli_query($conn,$sql);
        print_r ($result);
    }


    public function selectCategoria() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $sql = "SELECT * FROM categorias";
    
        $result = mysqli_query($conn, $sql);
        $categoria = array();
    
        while ($row = mysqli_fetch_assoc($result)) {
            $categoria = array(
                'id_categoria' => $row['id_categoria'],
                'nombre_categoria' => $row['nombre_categoria'],
                'foto' => $row['foto']
            );
            $categorias[] = $categoria;
        }
        return $categorias;
    }
    


    public function selectProducto($idProducto) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $sql;
        if ($idProducto) {
            $sql = "SELECT * FROM productos WHERE id_producto = '$idProducto'";
            
        }
    
        $result = mysqli_query($conn, $sql);
        $productos = array();
    
        while ($row = mysqli_fetch_assoc($result)) {
            $producto = array(
                'id_producto' => $row['id_producto'],
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion'],
                'precio' => $row['precio'],
                'foto' => $row['foto'],
                'id_categoria' => $row['id_categoria']
            );
            $productos[] = $producto;
        }
    
        return $productos;
    }



    public function selectProductos() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $sql = "SELECT * FROM productos";
    
        $result = mysqli_query($conn, $sql);
        $productos = array();
    
        while ($row = mysqli_fetch_assoc($result)) {
            $producto = array(
                'id_producto' => $row['id_producto'],
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion'],
                'precio' => $row['precio'],
                'foto' => $row['foto'],
                'id_categoria' => $row['id_categoria']
            );
            $productos[] = $producto;
        }
        return $productos;
    }

    



















    public function deleteCategoria($idCategoria) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        if($idCategoria) {
            $sql="DELETE FROM categorias WHERE id_categoria=$idCategoria";
            $result = mysqli_query($conn,$sql);
            echo "Categoria eliminada correctamente";
        }
    }

    public function deleteProducto($idProducto) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($idProducto) {
            $sql="DELETE FROM productos WHERE id_producto=$idProducto";
            $result = mysqli_query($conn,$sql);
            echo "Producto eliminado correctamente";
        }
    }
    public function updateCategoria($categoria) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $sql = "UPDATE categorias SET nombre_categoria = '" .$categoria->getNombreCategoria()."' WHERE id_categoria = " .$categoria->getIdCategoria();
        $result = mysqli_query($conn,$sql);
    }

    public function updateProducto($producto) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $sql = "UPDATE productos SET nombre = '" .$producto->getNombre()."', descripcion ='".$producto->getDescripcion()."', precio = ".$producto->getPrecio().", foto = '".$producto->getFoto()."' WHERE id_producto = " .$producto->getIdProducto();
        $result = mysqli_query($conn,$sql);   
    }
}
?>   
