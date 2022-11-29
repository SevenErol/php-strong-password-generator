<?php
include __DIR__ . "./functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> password generator </title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>

<body>
    <div class="container p-5 text-center">

        <h1>Strong Password Generator</h1>

        <h3>Genera una password sicura </h3>

        <?php if (!isset($_GET['length'])) : ?>

            <div class="p-5">
                <p>Nessun parametro valido inserito</p>
            </div>

        <?php elseif (isset($_GET['length']) && is_numeric($_GET['length']) && isset($_GET['option']) && isset($_GET['letters']) && isset($_GET['numbers']) && isset($_GET['special_characters'])) : ?>

            <div class="p-5">
                <p>La password per te generata è: <?php echo password_generate($_GET['length'], $_GET['option'], $_GET['letters'], $_GET['numbers'], $_GET['special_characters']) . "\n" ?></p>
            </div>

        <?php else : ?>

            <div class="p-5">
                <p><?php echo password_generate($_GET['length'], $_GET['option'], $_GET['letters'], $_GET['numbers'], $_GET['special_characters']) . "\n"  ?></p>
            </div>

        <?php endif ?>

        <form action="index.php" method="get">

            <div class="row gy-5">

                <div class="col-6 text-start">
                    <label for="length">Inserisci la lunghezza desiderata per la tua password: </label>
                </div>

                <div class="col-6">
                    <input type="text" id="length" name="length">
                </div>

                <div class="col-6 text-start">
                    <label for="repetition">Consenti caratteri ripetuti:</label>
                </div>

                <div class="col-6">

                    <div class="repetition">

                        <label for="yes">Sì</label>
                        <input type="radio" name="option" id="yes" value="true">

                        <label for="no">No</label>
                        <input type="radio" name="option" id="no" value="false">

                    </div>

                    <div class="checkboxes">

                        <div class="box d-flex justify-content-center">

                            <label class="col-4" for="letters">Lettere</label>
                            <input type="checkbox" name="letters" id="letters">

                        </div>

                        <div class="box d-flex justify-content-center">

                            <label class="col-4" for="numbers">Numeri</label>
                            <input type="checkbox" name="numbers" id="numbers">

                        </div>

                        <div class="box d-flex justify-content-center">

                            <label class="col-4" for="special_characters">Caratteri speciali</label>
                            <input type="checkbox" name="special_characters" id="special_characters">

                        </div>

                    </div>

                </div>

            </div>

            <div class="buttons p-5">

                <button type="submit" class="btn btn-primary">Invia richiesta</button>

                <button type="reset" class="btn btn-secondary">Annulla</button>

            </div>



        </form>

    </div>


    <!-- script bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>

</body>

</html>