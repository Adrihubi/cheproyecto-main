<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?e=actualizarP" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $producto['id_producto']; ?>">
        
        <input type="hidden" name="imagen_actual" value="<?php echo $producto['imagen']; ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $producto['descripcion']; ?>">

        <label>Caducidad:</label>
        <input type="date" name="caducidad" value="<?php echo $producto['caducidad']; ?>">

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?php echo $producto['precio']; ?>">

        <label>Imagen actual:</label>
        <img src="<?php echo $producto['imagen']; ?>" width="100"><br>

        <label>Subir nueva imagen:</label>
        <input type="file" name="imagen">

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>