<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastTicket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div style="font-family: Arial, sans-serif; display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <h1 style="margin-bottom: 20px;">Carrito de Compras</h1>
    
        <!-- Listado de productos en el carrito -->
        <div style="width: 50%; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; margin-bottom: 20px;">
           <!-- Producto 1 -->
    <?php
foreach ($data as $producto) {
    echo '<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">';
    echo '<div>';
    echo '<h3 style="margin: 0;">' . $producto['Nombre_Producto'] . '</h3>';
    echo '<p style="margin: 0;">' . $producto['Precio'] . ' | Cantidad: ' . $producto['cantidad'] . '</p>'; // Mostrar la cantidad del producto
    echo '</div>';
    echo '<a href="./cart.html" style="text-decoration: none; color: inherit; padding: 10px 30px; background-color: #98D9C2; border: none; border-radius: 5px; cursor: pointer; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; gap: 10px">';
    echo '<img style="width: 75%;" src="../utils/trash.svg">';
    echo '</a>';
    echo '</div>';
}
?>
    
        <!-- Botón para Confirmar Pedido -->
        <button style="padding: 10px 20px; background-color: #437F97; color: white; border: none; border-radius: 5px; cursor: pointer;"><p style="font-size: 20px;">Confirmar Pedido</p></button>
    </div>
</body>
</html>
