<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 32</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <h1 class="w-100 p-2 bg-primary text-white text-center"> REGISTRO REGISTRAZIONI </h1>
    <?php
        if(!isset($_SESSION["registrations"])) {
            echo "<p> Nessuna registrazione effettuata ancora - torna più tardi </p>";
            exit();
        }

        function getAverageAge() {
            $sum = 0;
            foreach($_SESSION["registrations"] as $fc => $eta) {
                $sum += $_SESSION["registrations"][$fc];
            }
            return floatval($sum / count($_SESSION["registrations"]));
        }
    ?>

    <div class="bg-body-secondary rounded-4 shadow-lg mx-auto w-50 p-2">
        <table class="table">
            <tr>
                <th> CODICE FISCALE </th>
                <th> ETÀ </th>
            </tr>
            <?php
                foreach($_SESSION["registrations"] as $fc => $eta) {
                    echo "<tr> <td> $fc </td> <td> $eta </td> </tr>";
                }
            ?>
        </table>
    </div>

    <h3 class="text-center bg-warning w-25 mx-auto"> Età media : <?php echo getAverageAge() ?> anni </h3>

    <div class="w-50 mx-auto text-center">
        <a href="index.html" target="_self" class="link-info fs-3">torna alla home</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>