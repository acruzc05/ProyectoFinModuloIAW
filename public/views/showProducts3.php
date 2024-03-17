<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px; /* Ajusta según sea necesario */
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    .btn {
      text-decoration: none;
      padding: 6px 12px;
      border: 1px solid #007bff;
      color: #007bff;
      border-radius: 4px;
      display: inline-block;
    }

    .btn-primary {
      background-color: #007bff;
      color: #fff;
    }
  </style>
  <title>Tabla con Estilos</title>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Descripción</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $article) {
        echo "<tr>";
        echo "<td>" . $article['Nombre_Producto'] . "</td>";
        echo "<td>" . $article['Precio'] . "€</td>";
        echo "<td>" . $article['Descripcion'] . "</td>";
        echo "<td><a href='index.php?controller=ProductsController&action=addTaxi&ID_Producto=" . $article['ID_Producto'] . "' class='btn btn-primary'>Añadir al carrito</a></td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
