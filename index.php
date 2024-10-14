<?php
require __DIR__ . "/classes/Category.php";
require __DIR__ . "/classes/Foods.php";
require __DIR__ . "/classes/Kennels.php";
require __DIR__ . "/classes/Toys.php";
require __DIR__ . "/db.php";
require_once __DIR__ . "/traits/Available.php";

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

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Styel-->
    <link rel="stylesheet" href="css/style.css">

</head>
</head>

<body>
    <!--Header-->
    <header>
        <nav class="navbar container">
            <!--Gender-->
            <div class="navbar-link">
                <ul>
                    <li><a href="#">Cane</a></li>
                    <li><a href="#">Gatto</a></li>
                </ul>
            </div>
            <!--Logo and actions-->
            <div class="navbar-actions">
                <a href="#"><img src="img/boolean-logo.png" alt="boolean logo" class="logo"></a>
                <div><a href="#"><i class="fa-solid fa-user"></i></a><a href="#"><i
                            class="fa-regular fa-heart"></i></a><a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <!--Main-->
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $key => $singleProduct) { ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-image"><img src="<?= $singleProduct->getImageUrl()  ?>" alt="$key" class="img-fluid">
                                <span class="tag cl-black heart">&#9829;</span>
                            </div>
                            <div class="cl-black">
                                <?= $singleProduct->getType(); ?>
                                <h4><?= $singleProduct->getName();  ?></h4>
                                <?php if ($singleProduct->getType() == "Toy") { ?>
                                    <div class="material"><?= "materiale: ", $singleProduct->getMaterial(); ?></div>
                                    <div class="use"><?= "ottimo per ", $singleProduct->getUse(); ?></div>
                                <?php } elseif ($singleProduct->getType() == "Kennel") { ?>
                                    <div class="material"><?= "materiale: ", $singleProduct->getMaterial(); ?></div>
                                    <div class="color"><?= "colore: ", $singleProduct->getColor(); ?></div>
                                <?php } else { ?>
                                    <div class="expiration"><?= "best before: ", $singleProduct->getExpiration(); ?></div>
                                    <div class="color"><?= "consistenza ", $singleProduct->getConsistence(); ?></div>
                                <?php } ?>
                                <?php if ($singleProduct->IsAvailable() == "buy") { ?> <i class="text-success fa-solid fa-cart-plus"></i> <?php } else { ?>
                                    <i class="text-danger fa-solid fa-cart-shopping"></i> <?php } ?>
                                <span class="text-danger">
                                    <?php
                                    try {
                                        echo $singleProduct->getPrice();
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>