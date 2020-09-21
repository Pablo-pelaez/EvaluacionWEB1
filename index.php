<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Taller Web 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ejercicio 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ejercicio 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ejercicio 5</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- Jumbotron -->
    </header>

    <main>

        <div class="container my-5">
            <form action="index.php" method="POST">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1"><b>Resultado de la Operación</b></label>
                    <input type="number" class="form-control" name="resultado" readonly>
                </div> -->
                <div class="form-group">
                    <h4 class="text-center my-4">CALCULADORA BÁSICA</h4>
                    <label for="exampleInputPassword1"><b>Número 1</b></label>
                    <input type="number" class="form-control" name="numero1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Número 2</b></label>
                    <input type="number" class="form-control" name="numero2">
                </div>
                <div>
                    <select name="operador" class="mb-3">
                        <option value="1">Sumar</option>
                        <option value="2">Restar</option>
                        <option value="3">Multiplicar</option>
                        <option value="4">Dividir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info" name="btnCalcular" value="cj">Calcular</button>
            </form>

            <?php
                if (isset($_POST["btnCalcular"])):
            ?>

            <h4 class="mt-4">    
                <?php
                    $numero1 = $_POST["numero1"];
                    $numero2 = $_POST["numero2"];
                    $operador = $_POST["operador"];

                    if($numero1 !== "" && $numero2 !== "")
                    {
                        switch($operador)
                        {
                            case 1:
                                $resultado = $numero1 + $numero2;
                                echo("El resultado es: ".$resultado);
                            break;

                            case 2:
                                $resultado = $numero1 - $numero2;
                                echo("El resultado es: ".$resultado);
                            break;

                            case 3:
                                $resultado = $numero1 * $numero2;
                                echo("El resultado es: ".$resultado);
                            break;

                            case 4:
                                $resultado = $numero1 / $numero2;
                                echo("El resultado es: ".$resultado);
                            break;
                        }
                    }
                    else
                    {
                        echo("Debes ingresar los dos valores");
                    }
                ?>
            </h4>    

            <?php endif; ?>

        </div>

    </main>

    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>