<?php



echo '
<div style="margin-top: 75px; margin-bottom: 150px;">
    <div style="font-family: Arial, sans-serif; display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <h1 style="margin-bottom: 20px;">Detalles del Evento</h1>
    </div>';

// Agregamos el inicio de la etiqueta PHP para insertar la lógica PHP dentro del HTML
echo '<div style="display: flex; flex-wrap: wrap; justify-content: center;">';

// Suponiendo que $producto es un array con los detalles del producto
echo '
    <div style="width: calc(75% - 20px); background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <img src="' .$data['Imagen']. '" alt="Placeholder Image" style="width: 425px; height: 250px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
        <div style="flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
            <div style="flex-grow: 1; display: flex; flex-direction: row; align-items: center; gap: 20px">
                <h3 style="margin-top: 30px; font-size: 30px;">' .$data['Nombre_Producto']. '</h3>
                <a href="./cart.html" style="text-decoration: none; color: inherit; padding: 10px 30px; background-color: #98D9C2; border: none; border-radius: 5px; cursor: pointer; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; gap: 10px">
                    <p style="font-size: 16px;">' .$data['Precio']. '€</p>
                    <img style="width: 50%;" src="./cart.svg">
                </a>
            </div>  
            <p style="margin-top: 10px; font-size: 18px;">' .$data['Descripcion']. '</p>
        </div>
    </div>';

// Cerramos la etiqueta div que envuelve el contenido
echo '</div>';

// Cerramos la etiqueta div que envuelve todo el contenido
echo '</div>';
?>
