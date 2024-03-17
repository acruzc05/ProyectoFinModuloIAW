<?php
session_start();
include_once ("views/header.php");
include ("controllers/ProductsController.php");
include ("controllers/UsersController.php");

//Punto de entrada a la aplicación. Si no se recibe parámetro action y controller en la url
//se muestra la página de inicio (texto HTML).
//En caso de que si se reciba, se instancia el controlador y se invoca la acción indicada.

if (isset($_REQUEST['action']) && isset($_REQUEST['controller']) ){
    $act=$_REQUEST['action'];
    $cont=$_REQUEST['controller'];

    //Instanciación del controlador e invocación del método
    $controller=new $cont();
    $controller->$act();

}
else{
    echo 
    '<html>
    <style>
    .public {
      position: fixed;
      bottom: 0;
      width: 100%;
      margin-bottom: 50px;
  }
    </style>

    <body>
    <div>
    <div style="display: flex; flex-direction: column; align-items: center; height: 100vh; text-align: center; margin-top: 40px;">
        <h1 style="font-size: 3.5em; margin-bottom: 20px;">FastTicket</h1>
        <p style="font-size: 1.5em; margin-bottom: 10px;">Bienvenido a FastTicket,</p>
        <p style="font-size: 1.5em; margin-bottom: 10px;">tu tienda online de compra de entradas</p>
    </div>
    
    <img class="public" src="../utils/public.png" style="margin-top: 80px;">
</div>
    </body>
    </html>';
}

  require_once ("views/footer.php");

?>
