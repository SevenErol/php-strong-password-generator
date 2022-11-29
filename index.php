<?php
function password_generate($chars)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7) . "\n";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> password generator </title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>

<body>
    <div class="container p-5 text-center">

        <h1>Strong Password Generator</h1>

        <h3>Genera una password sicura </h3>

        <?php if (!isset($_GET['length'])) : ?>

            <div class="p-5">
                <p>Nessun parametro valido inserito</p>
            </div>

        <?php endif ?>

        <form action="index.php" method="get">

            <div class="row">

                <div class="col-6">
                    <label for="length">Inserisci la lunghezza desiderata: </label>
                </div>

                <div class="col-6">
                    <input type="text" id="length" name="length">
                </div>

            </div>

        </form>

    </div>


    <!-- script bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>

</body>

</html>