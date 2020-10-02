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
                    <a href="index.php"><button type="button" class="btn btn-lg btn-primary mr-3">Ejercicio1</button></a>
                    <a href="ejercicio2.php"><button type="button" class="btn btn-lg btn-dark mr-3">Ejercicio2</button></a>
                    <a href="ejercicio6.php"><button type="button" class="btn btn-lg btn-danger mr-3">Ejercicio6</button></a>
                    <a href="ejercicio4.php"><button type="button" class="btn btn-lg btn-success mr-3">Ejercicio4</button></a>
                </div>
            </div>
        </div>

    </header>

    <main class="container">

        <div class="container">
            <form action="ejercicio6.php" method="POST">
                <div class="form-group">
                    <h4 class="mb-4">LISTA DE N NÚMEROS PARES</h4>
                    <label class="mb-4">Ingresa la cantidad de números pares</label>
                    <input type="number" class="form-control" name="numPares">
                </div>
                <button type="submit" class="btn btn-info" name="btnCalcular" value="cj">Calcular</button>
            </form>

            <?php if (isset($_POST["btnCalcular"])) : ?>

                <?php

                $numerospares = $_POST["numPares"];
                $tamañoVector = ($numerospares * 2);
                $vectorPares = array();
                $vectorRelleno = array();


                for ($i = 1; $i <= $tamañoVector; $i++) {
                    $vectorRelleno[] = +$i;
                }

                ?>

                <table class="table table-sm mt-5">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Números Pares</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($vectorRelleno as $valor) : ?>
                            <tr>
                                <th><?php if ($valor % 2 == 0) {
                                        echo ($valor);
                                        echo ("<br>");
                                    } ?></th>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php endif; ?>
        </div>






        <footer>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>