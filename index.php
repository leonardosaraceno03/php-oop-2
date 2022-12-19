<?php
include_once __DIR__ . "/classi/accessori.php";
include_once __DIR__ . "/classi/category.php";
include_once __DIR__ . "/classi/cibo.php";
include_once __DIR__ . "/classi/giocattoli.php";
include_once __DIR__ . "/classi/prodotto.php";



$category = [
    "cane" => new category("Cane"),
    "gatto" => new category("Gatto"),
    "uccello" => new category("Uccello")
];
$cibo = [
    "royal canin" => new cibo("Royal Canin", 43.99, $category["cane"], "545g", "Ingredienti: prosciutto, riso"),
    "almo nature" => new cibo("Almo Nature", 44.99, $category["cane"], "600g", "Ingredienti: manzo, cereali ")

];
$giocattoli = [
    "topini di peluche trixie" => new giocattoli("Topini di peluche Trixie", 4.99, $category["gatto"], "Caratteristiche: Morbido", "Dimensioni: 8,5cm x 10cm")
];
$accessori = ["voliera ferplast bella casa" => new accessori("Voliera Ferplast Bella Casa", 184.99, $category["uccello"], "Materiale: Legno", "Dimensioni: Grande")];
var_dump($cibo);
var_dump($giocattoli);
var_dump($accessori)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="w-75 mx-auto container-fluid">
        <h1>Boolshop</h1>
        <h5>I nostri prodotti</h5>

        <div class="row">


            <?php foreach ($cibo as $key => $elem) { ?>
                <div class="col-4 border">
                    <?php foreach ($elem as $value) { ?>
                        <div>
                            <?php echo $value; ?>
                        </div>

                    <?php } ?>
                </div>
            <?php } ?>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>