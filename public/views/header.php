<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
    
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastTicket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        /* Estilos del header */
        body {
            margin: 0;
            font-family: "REM", sans-serif;
            font-optical-sizing: auto;
            font-weight: 48px;
            font-style: normal;
            padding-bottom: 60px; /* Altura del footer */
            background-color: #FBF2EE;
        }

        header {
            background-color: #050517;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            color: #fff;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        .menu-icon {
            display: none;
            cursor: pointer;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 600px) {
            nav {
                display: none;
            }

            .menu-icon {
                display: block;
            }

            nav.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 60px;
                background-color: #333;
                width: 100%;
                z-index: 1;
            }

            body {
                padding-bottom: 120px; /* Ajuste para el footer fijo */
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php"><h1>FastTicket</h1></a>
        <nav>
            <a href="index.php?controller=ProductController&action=insertProduct">Crear</a>
            <a href="index.php?controller=ProductController&action=getAllProducts">Tickets</a>
            <a href="index.php?controller=ProductController&action=verCarrito">Carrito</a>
            <a href="index.php?controller=UsuController&action=showiniciosesion">Login</a>
            
        </nav>
        <?php
       /*  if  (isset($_SESSION['usuario']) && $_SESSION['usuario']->Rol =='Admin') {
            
            echo '<a href="index.php"><h1>FastTicket</h1></a>';
                echo '<nav>';

               echo'<a href="index.php?controller=ProductController&action=insertProduct">Crear</a>';
               echo'<a href="index.php?controller=ProductController&action=getAllProducts">Tickets</a>';
               echo'<a href="">Cerrar sesión</a>';
         }
        else if (isset($_SESSION['usuario']) && $_SESSION['usuario']->Rol == 'User') {
            echo '<a href="index.php"><h1>FastTicket</h1></a>';
            echo '<nav>';

           
           echo'<a href="index.php?controller=ProductController&action=getAllProducts">Tickets</a>';
           echo'<a href="./cart.html">Carrito</a>';
           echo'<a href="">Cerrar sesión</a>';
     }*/
?>
        
    </header>
</body>
</html>

