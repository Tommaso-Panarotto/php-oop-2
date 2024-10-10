<?php
require __DIR__ . "/classes/Category.php";
require __DIR__ . "/classes/Foods.php";
require __DIR__ . "/classes/Kennels.php";
require __DIR__ . "/classes/Toys.php";
require __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolAnimalShop</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
</head>

<body>
    <h2><?= $kong->getUse() ?></h2>
</body>

</html>