<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de PHP</title>
    <link rel="stylesheet" href="../htdocs/EvaluacionWEB1/diseño.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <header>

        <div class="jumbotron">
            <div class="container">
                <h1>DESARROLLO DE PHP</h1>
                <p>The PHP Manual is available online in a selection of languages.
                    Please pick a language from the list below.</p>
                <div class="btn-group mt-3" role="group" aria-label="Basic example">
                    <a href="index.php"><button type="button" class="btn btn-lg btn-primary mr-3">Ejercicio1</button></a>
                    <a href="ejercicio2.php"><button type="button" class="btn btn-lg btn-dark mr-3">Ejercicio2</button></a>
                    <a href="ejercicio6.php"><button type="button" class="btn btn-lg btn-danger mr-3">Ejercicio6</button></a>
                    <a href="ejercicio4.php"><button type="button" class="btn btn-lg btn-success mr-3">Ejercicio4</button></a>
                </div>
            </div>
        </div>

    </header>

    <main>

        <div class="container my-5">
            <form action="index.php" method="POST">
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
                <button type="submit" class="btn btn-success" name="btnCalcular" value="cj">Calcular</button>
            </form>

            <?php
            if (isset($_POST["btnCalcular"])) :
            ?>

                <h4>
                    <?php
                    $numero1 = $_POST["numero1"];
                    $numero2 = $_POST["numero2"];
                    $operador = $_POST["operador"];

                    if ($numero1 !== "" && $numero2 !== "") {
                        switch ($operador) {
                            case 1:
                                $resultado = $numero1 + $numero2;
                                echo ("El resultado es: " . $resultado);
                                break;

                            case 2:
                                $resultado = $numero1 - $numero2;
                                echo ("El resultado es: " . $resultado);
                                break;

                            case 3:
                                $resultado = $numero1 * $numero2;
                                echo ("El resultado es: " . $resultado);
                                break;

                            case 4:
                                $resultado = $numero1 / $numero2;
                                echo ("El resultado es: " . $resultado);
                                break;
                        }
                    } else {
                        echo ("Debes ingresar los dos valores");
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