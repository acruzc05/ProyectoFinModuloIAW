
<div style="font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; margin: 0; margin-top: 125px;">


        <form class="form" action="index.php?controller=ProductController&action=insertProduct" method="post" style="background-color: #fff; border-radius: 15px; padding: 40px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); width: 400px; display: flex; flex-direction: column;">
            <h2 style="text-align: center; margin-bottom: 30px; font-size: 28px;">Crear evento</h2>
            
            <input class="form-control" name="nombre" value="" type="text" placeholder="Título" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">
            <?php
                if (isset($data) && isset($data['nombre']))
                echo "<div class='alert alert-danger'>"
                       .$data['nombre'].
                      "</div>";
            ?>
            <input class="form-control" name="descripcion" type="text" placeholder="Descripción" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">
            <?php
                if (isset($data) && isset ($data['descripcion']))
                echo "<div class='alert alert-danger'>"
                       .$data['descripcion'].
                      "</div>";
            ?>
            <input class="form-control" name="precio" type="number" placeholder="Precio" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">
            <?php
                if (isset($data) && isset($data['precio']))
                echo "<div class='alert alert-danger'>"
                       .$data['precio'].
                      "</div>";
            ?>
            <input type="text" placeholder="URL Imagen" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">

            <button class="form-group" name="insertar" value="Enviar" type="submit" style="background-color: #437F97; color: white; padding: 20px; border: none; border-radius: 10px; cursor: pointer; font-size: 20px;">Crear</button>
            
        </form>
    
    </div>