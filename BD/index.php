<?php
include('conexiondb.php');


$sqlcategorias= 'SELECT * FROM Categorias';
$resultadocategorias= $conexion->query($sqlcategorias);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reportes DB</title>
</head>

<body>
    <div class="container">
        <h1 align="center">Ejemplos de Reportes PDF</h1>
        <br>
        <form action="#" method="POST" class="form-inline">

            <label for="" class="my-1 mr-2">Categoría</label>

            <select name="cat" class="custom-select my-1 mr-sm-2" required>

                <option value="">Seleccionar</option>



                <?php foreach ($resultadocategorias as  $nombreCategoria):?>
                <option value="<?php echo $nombreCategoria['IdCategoria']; ?>">
                    <?php echo $nombreCategoria['NombreC']; ?></option>
                <?php endforeach ?>
            </select>

            <button type="submit" name="mostrar" class="btn btn-primary my-1">Mostrar</button>

        </form>

        <?php

        if(isset($_POST['mostrar'])){
        

          $categoriaSeleccionada= $_POST['cat'];

          //echo  'Categoria ',$categoriaSeleccionada;


          $sqlproductos = "SELECT p.CodigoP,p.NombreP, p.Precio,c.IdCategoria FROM productos AS p INNER JOIN categorias AS c ON p.IdCategoria = c.IdCategoria WHERE c.IdCategoria =  $categoriaSeleccionada";

          $resultadoProductos = $conexion->query($sqlproductos);
          ?>


        <h4 align="center">*** Listado de productos ***</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>

                <?php
        while($registro =  $resultadoProductos->fetch_array(MYSQLI_BOTH)){

          echo "
          <tr>
          <td>".$registro['CodigoP']."</td>
          <td>".$registro['NombreP']."</td>
          <td>".$registro['Precio']."</td>
          
          </tr>
          
          ";

        }
        $conexion->close();
        ?>
            </tbody>
        </table>

        <a class="link" href="../reportedb.php?idCat=<?php  echo $categoriaSeleccionada; ?>" target="_blank"> <i class="fas fa-print"></i>Imprimir</a>



        <?php
       } else{      ?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="3">

                        <div class="alert alert-danger" role="alert">
                            No hay datos
                        </div>
                    </td>
                </tr>


            </tbody>
        </table>


        <?php
            }
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>