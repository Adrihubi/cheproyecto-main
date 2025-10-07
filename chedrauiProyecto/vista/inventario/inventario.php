<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

                                <tr>
                                    <a href="index.php?e=agregarP">Agregar Productos</a>
                                </tr>

                    </thead>
                    <tbody>
                        <?php
                            foreach($datos as $key => $value) {
                                foreach($value as $va) {
                                    echo "<tr><td>".$va['id_producto']."</td>";
                                    echo "<td><img src='".$va['imagen']."' alt='imagen' width='50'></td>";
                                    echo "<td>".$va['nombre']."</td>";
                                    echo "<td>".$va['descripcion']."</td>";
                                    echo "<td>".$va['caducidad']."</td>";
                                    echo "<td>".$va['precio']."</td>"; // Asegúrate de que el nombre de la columna sea correcto
                                    echo "<td> <a class='BotonesAccion1' href='index.php?e=editarP&id=".$va['id_producto']."'>Editar</a> <a class='BotonesAccion2' href='index.php?e=eliminarP&id=".$va['id_producto']."'>Eliminar</a>
                                    </td>";
                                }
                            }
                        ?>      
                    </tbody>
                </table>
            </form>
</body>
</html>