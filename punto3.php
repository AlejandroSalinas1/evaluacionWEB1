<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EvaluacionWEB1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="programa.php">Punto 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto2.php">Punto 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto3.php" tabindex="-1">Punto 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="punto4.php" tabindex="-1">Punto 4</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div>
    <h1>Spring Step (Compras ZAPATOS)</h1>
    <form action="punto3.php" method="POST">
        <div class="row">
            <div class="col-3">
            <select class="form-control" name="opciones">
                <option value="nike">Nike   ($650.000)</option>
                <option value="adidas">Adidas   ($550.000)</option>
                <option value="newBalance">New Balance   (450.000)</option>
                <option value="reebok">Reebok   ($650.000)</opti1on>
                <option value="puma">Puma   ($350.000)</option>
                <option value="converse">Converse   ($450.000)</option>
                <option value="vans">Vans   ($250.000)</option>
            </select>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" placeholder="Precio indicado en la marca" name="precio">
            </div>
            <div class="col-3">
            <input type="text" class="form-control" placeholder="Cantidad" name="cantidad">
            </div>
        </div>
        <button type="submit" class="btn btn-success" name="botonFinalizar">Finalizar</button>
    </form>
    <?php
        if(isset($_POST["botonFinalizar"])){

            $precio=$_POST["precio"];
            $cantidad=$_POST["cantidad"];   
            $total=$precio*$cantidad;
            
            if($cantidad==3){
                $descuento=$total*(10/100);
                $pago=$total-$descuento;
                echo("El descuento brindado es igual al 10% del total de la compra: ".$descuento);
                echo("<br>");
                echo("El valor total a pagar es: ".$pago);
            }elseif($cantidad>3 && $cantidad<=8){
                $descuento=$total*(20/100);
                $pago=$total-$descuento;
                echo("El descuento brindado es igual al 20% del total de la compra: ".$descuento);
                echo("<br>");
                echo("El valor total a pagar es: ".$pago);
            }elseif($cantidad>8){
                $descuento=$total*(50/100);
                $pago=$total-$descuento;
                echo("El descuento brindado es igual al 50% del total de la compra: ".$descuento);
                echo("<br>");
                echo("El valor total a pagar es: ".$pago);
            }
        }
    ?>
    </div>
  </body>
</html>