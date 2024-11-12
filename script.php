<?php

    session_start();

    if(!isset($_SESSION["registrations"]))
        $_SESSION["registrations"] = [];
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
    
    <?php

        $fisc_code = $_GET["cf"];
        $age = $_GET["age"];

        $_SESSION["registrations"][$fisc_code] = $age;

    ?>

    <h1 class="w-100 p-2 bg-primary text-white text-center">  REGISTRAZIONE EFFETTUATA  </h1>

    <div class="bg-body-secondary rounded-4 shadow-lg mx-auto w-50 p-2">
        <p> Codice fiscale inserito: <b><?php echo $fisc_code ?> </b></p><br>
        <p> Età inserita:<b> <?php echo $age ?> </b> </p>
    </div>
    <div class="w-50 mx-auto text-center">
        <a href="index.html" target="_self" class="link-info fs-3">torna alla home</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>