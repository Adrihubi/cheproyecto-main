<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3" >
            <label for="imagen" class="form-label">Imagen: </label>
            <input class="form-control" name="imagen" type="file" id="imagen">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del producto">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion: </label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripcion del producto">
        </div>
        <div class="mb-3">
            <label for="caducidad" class="form-label">Caducidad: </label>
            <input type="date" name="caducidad" class="form-control" id="caducidad" placeholder="Fecha que caduca">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio: </label>
            <input type="number" name="precio" step="0.01" class="form-control" id="precio" placeholder="Precio del Producto">
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Agregar">
        <input type="hidden" name="e" value="guardarI">

    </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>