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
    <h1>Conocer tu IMC (Indice de Masa Corporal)</h1>
    <form class="mt-3" action="punto2.php" method="POST">
        <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">¿Cuál es tu peso?</label>
                <input type="text" class="form-control" placeholder="00" name="peso">
                <small id="emailHelp" class="form-text text-muted">Ingresa tu peso expresado en kilogramos.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">¿Cuál es tu altura?</label>
                <input type="text" class="form-control" placeholder="Ejemplo 1.70" name="altura">
                <small id="emailHelp" class="form-text text-muted">Ingresa tu altura expresada en metros ej. 1.69</small>
            </div>
            <button type="submit" class="btn btn-success" name="botonCalcular">Calcular</button>
    </form>
    </div>
    <?php
        if(isset($_POST["botonCalcular"])){
            $peso=$_POST["peso"];
            $altura=$_POST["altura"];
            $imc=$peso/($altura*$altura);
            echo("Tu ìndice de masa corporal (IMC) es: ".$imc);
            echo("<br>");
            if($imc<18.5){
                echo("Según tu IMC te encuentras con PESO INSUFICIENTE");
            }elseif($imc>=18.5 && $imc<24.9){
                echo("Según tu IMC tu peso se encuentra NORMAL");
            }elseif($imc>=25 && $imc<=26.9){
                echo("Según tu IMC te encuentras en SOBRE PESO GRADO I");
            }elseif($imc>=27 && $imc<=29.9){
                echo("Según tu IMC te encuentras en SOBRE PESO GRADO II (PREOBESIDAD)");
            }elseif($imc>=30 && $imc<=34.9){
                echo("Según tu IMC te encuentras en OBESIDAD TIPO I");
            }elseif($imc>=35 && $imc<=39.9){
                echo("Según tu IMC te encuentras en OBESIDAD TIPO II");
            }elseif($imc>=40 && $imc<=49.9){
                echo("Según tu IMC te encuentras en OBESIDAD TIPO III (MÓRBIDA)");
            }elseif($imc>50){
                echo("Según tu IMC te encuentras en OBESIDAD TIPO IV (EXTREMA)");
            }
        }
    ?>
    </div>
  </body>
</html>