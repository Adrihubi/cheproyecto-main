<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chedraui</title>
</head>
<body>
    <h2>Centro de ayuda</h2>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
        </div>
    </div>
    <form class="inventario" action="" method="">
                <table class="table">
                    <thead class="thead-dark">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Caducidad</th>
                                <th scope="col">Precio</th>
                                </tr>

                    </thead>
                    <tbody>
                        <?php
                            foreach($datos as $key => $value) {
                                foreach($value as $va) {

                                }
                            }
                        ?>      
                    </tbody>
                </table>
            </form>

    <h4>¿Necesitas ayuda?</h4>
</body>
</html>