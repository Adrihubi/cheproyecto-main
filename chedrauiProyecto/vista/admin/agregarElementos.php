<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- Aqui se agregaran las imagenes del carrucel promocional-->
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3" >
            <label for="imagen" class="form-label">Imagen: </label>
            <input class="form-control" name="imagen" type="file" id="imagen">
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Agregar">
        <input type="hidden" name="p" value="guardarIm">

    </form>

    <form method="post" enctype="multipart/form-data">

        <div class="mb-3" >
            <label for="imagen" class="form-label">Logo </label>
            <input class="form-control" name="imagen" type="file" id="imagen">
        </div>

        <input class="btn btn-outline-primary" type="submit" value="Agregar">
        <input type="hidden" name="l" value="guardarLo">

    </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>