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
        <div class="jumbotron">
            <div class="container">
                <h1>DESARROLLO DE PHP</h1>
                <p>The PHP Manual is available online in a selection of languages.
                    Please pick a language from the list below.</p>
                <div class="btn-group mt-3" role="group" aria-label="Basic example">
                    <a href="index.php"><button type="button" class="btn btn-lg btn-primary">Ejercicio1</button></a>
                    <a href="ejercicio2.php"><button type="button" class="btn btn-lg btn-dark">Ejercicio2</button></a>
                    <a href="ejercicio6.php"><button type="button" class="btn btn-lg btn-danger">Ejercicio3</button></a>
                    <a href="ejercicio4.php"><button type="button" class="btn btn-lg btn-success">Ejercicio4</button></a>
                    <a href="ejercicio5.php"><button type="button" class="btn btn-lg btn-info">Ejercicio5</button></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container my-5">
        </div>

        <div class="container">
            <form action="ejercicio2.php" method="POST">
                <div class="form-group">
                    <h2 class="text-center pt-4">Prevención de Riesgo de IMC</h2>
                    <label for="example"><b>Ingresa tu peso(kg)</b></label>
                    <input type="number" step="0.01" class="form-control" name="peso">
                </div>
                <div class="form-group">
                    <label for="example"><b>Ingresa tu altura(m)</b></label>
                    <input type="number" step="0.01" class="form-control" name="altura">
                </div>
                <button type="submit" class="btn btn-info" name="btnCalcular" value="cj">Calcular</button>


            </form>

            <?php if (isset($_POST["btnCalcular"])) : ?>

                <h4 class="mt-4 pb-4">
                    <?php
                    $peso = $_POST["peso"];
                    $altura = $_POST["altura"];
                    $imc = $peso / ($altura * $altura);

                    if ($imc < 18.5) 
                    {
                        echo("Según tu IMC (".$imc.") tu peso es insuficiente");
                    }
                    else
                    {
                        if($imc >= 18.5 && $imc <= 24.99)
                        {
                            echo("Según tu IMC (".$imc.") tu peso es el adecuado");
                        }
                        else
                        {
                            if($imc >= 25 && $imc <= 26.99)
                            {
                                echo("Según tu IMC (".$imc.") sufres de sobrepeso grado I");
                            }
                            else
                            {
                                if($imc >= 27 && $imc <= 29.99)
                                {
                                    echo("Según tu IMC (".$imc.") sufres de sobrepeso grado II (preobesidad)");
                                }
                                else
                                {
                                    if($imc >= 30 && $imc <= 34.99)
                                    {
                                        echo("Según tu IMC (".$imc.") sufres de obesidad tipo I");
                                    }
                                    else
                                    {
                                        if($imc >= 35 && $imc <= 39.99)
                                        {
                                            echo("Según tu IMC (".$imc.") sufres de obesidad tipo II");
                                        }
                                        else
                                        {
                                            if($imc >= 40 && $imc <= 49.99)
                                            {
                                                echo("Según tu IMC (".$imc.") sufres de obesidad tipo III");
                                            }
                                            else
                                            {
                                                echo("Según tu IMC (".$imc.") sufres de obesidad tipo IV");
                                            }
                                        }
                                    }
                                }
                            }
                        }
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