<?php
echo '
<div style="margin-top: 75px; margin-bottom: 100px;">
    <div style="font-family: Arial, sans-serif; display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <h1 style="margin-bottom: 20px;">Listado de Entradas</h1>
    </div>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">';

foreach ($data as $article) {
    echo '
        <!-- Card 1 -->
        <div style="width: calc(25% - 20px); background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; flex-direction: column; align-items: center; padding: 20px;">
            <img src="' . $article['Imagen'] . '" alt="Placeholder Image" style="width: 425px; height: 250px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div style="flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <h3 style="margin-top: 30px; font-size: 18px;">' . $article['Nombre_Producto'] . '</h3>
                <p style="margin-bottom: 30px; font-size: 22px;">' . $article['Precio'] . '€</p>
                <form action="index.php" method="GET">
                    <div style="flex-grow: 1; display: flex; flex-direction: row; align-items: center; gap: 20px">
                        <a href="index.php?controller=productController&action=verDetallesProducto&idProducto='.$article['ID_Producto'].'" style="padding: 10px 10px; background-color: #98D9C2; border: none; border-radius: 5px; cursor: pointer;"><img style="width: 25%;" src="../utils/eye.svg"/></a>
                        <input type="hidden" name="controller" value="productController">
                        <input type="hidden" name="action" value="addCarrito">
                        <input type="hidden" name="id" value="'.$article['ID_Producto'].'">
                        <input type="number" name="cantidad" value="1" min="1" style="width: 50px; padding: 5px; text-align: center;">
                        <button type="submit" style="padding: 10px 10px; background-color: #98D9C2; border: none; border-radius: 5px; cursor: pointer;"><img style="width: 25%;" src="../utils/cart.svg"/></button>
                    </div>
                </form>
            </div>
        </div>';
}

echo '
    </div>
</div>';
?>


