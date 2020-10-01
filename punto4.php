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
    <a class="navbar-brand" href="#">Taller Evaluativo 1</a>
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
    <form class="mt-3" action="punto4.php" method="POST">
        <div class="col-4">
            <div class="form-group">
                ¿Cuántas horas trabajaste en la semana?<input type="text" class="form-control" placeholder="Cantidad de horas trabajadas" name="cantidadHoras">
            </div>
            <button type="submit" class="btn btn-success" name="botonCalcular">Calcular</button>
    </form>
    </div>
    <?php
        if(isset($_POST["botonCalcular"])){
            $cantidadHoras=$_POST["cantidadHoras"];
            $diferenciaHoras;
            $pagoHorastrabajadas;
            $pagoDiferenciaHoras;
            if($cantidadHoras<=40){
                $pagoTotal=$cantidadHoras*20000;
                echo("El sueldo semanal del trabajador es: ".$pagoTotal);
            }elseif($cantidadHoras>40){
                $diferenciaHoras=$cantidadHoras-40;
                $pagoHorastrabajadas=40*20000;
                $pagoDiferenciaHoras=($diferenciaHoras*25000);
                $pagoTotal= $pagoDiferenciaHoras+$pagoHorastrabajadas;
                echo("La cantidad total de horas fue: ".$cantidadHoras);
                echo("<br>");
                echo("La cantidad de horas extras trabajadas fue: ".$diferenciaHoras);
                echo("<br>");
                echo("El pago que recibes por las horas extras trabajadas es: ".$pagoDiferenciaHoras);
                echo("<br>");
                echo("El pago total es: ".$pagoTotal);
            }
        }
    ?>
    </div>
  </body>
</html>