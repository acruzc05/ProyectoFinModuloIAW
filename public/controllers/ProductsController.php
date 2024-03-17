<?php

/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include ("views/View.php");
include ("models/productos.php");
class ProductController {

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     */
    public function getAllProducts (){
        require_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("views/showProducts", $products);


    }

    public function insertProduct(){
        $errores=array();
        
        /* Si se ha pulsado en el botón insertar se validan los datos y en caso de error, éstos se almacenan
        en el array $errores*/
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0) 
                $errores['nombre']="El nombre no puede estar vacío.";
            if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) 
                $errores['precio']="El precio no puede estar vacío.";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10) 
                $errores['descripcion']="La descripción debe tener al menos 10 caracteres";    
            
            /**
             * Si el array está vacío es que no hay errores. Si instancia un ProductoDAO y se trata de insertar
             * el nuevo producto en la BBDD. 
             * Si se produce la inserción, se llama al método que muestra todos los productos de la tienda.
             * Si hay error, se muestra la vista de inserción pasándole el array de errores.
             */
                if (empty($errores)){
                
                $pDAO=new ProductoDAO();
                if ($pDAO->insertProduct($_POST['nombre'], $_POST['precio'], $_POST['descripcion']))
                    $this->getAllProducts(); 
                     
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addProduct", $errores);  
                }     
            }
            else  View::show("addProduct", $errores);               
        }
        // Si no se pulsó el botón insertar, se muestra la vista con el formulario.
        else {
            View::show("addProduct", null);
        }
    }

    

    public function addCarrito(){
        
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito']=array();
          }
        $idproducto =$_REQUEST['id'];
        $cantidad = $_REQUEST['cantidad'];
        if (!isset($_SESSION['carrito'][$idproducto])) {
            // Si el producto no está en el carrito, añade la cantidad
            $_SESSION['carrito'][$idproducto] = $cantidad;
        } else {
            // Si el producto ya está en el carrito, suma la cantidad nueva a la existente
            $_SESSION['carrito'][$idproducto] += $cantidad;
        }   
        
            $ProductoDAO = new ProductoDAO();
            $Producto = $ProductoDAO->getAllProducts();
            $ProductoDAO= null;
            print_r($_SESSION);
            View::show("showProducts",$Producto);
        }
    

    public function verCarrito(){
        include_once 'models/productos.php';
        $pDAO=new ProductoDAO();
        $arrayCarrito= array();
        foreach($_SESSION['carrito'] as $id => $cantidad){
            $producto=$pDAO-> getProductById($id);
            array_push($arrayCarrito,$producto);
        }
        print_r ($arrayCarrito);
        View::show("cart", $arrayCarrito);
    }

    public function borrarproducto(){
        include_once 'models/productos.php';
        if (isset($_GET['id_product'])){
            $pDAO=new ProductoDAO();
            $products=$pDAO->borrarprod($_GET['id_product']);
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }

    }

    public function verDetallesProducto() {
        $idProducto = $_REQUEST['idProducto'];
        $productDAO = new ProductoDAO();
        $producto = $productDAO->getProductById($idProducto);
        // Enviamos la información del producto a detalles_producto.php
        View::show("views/showticketdesc", $producto);
    }
}

