<?php
include_once __DIR__ . "/classi/accessori.php";
include_once __DIR__ . "/classi/category.php";
include_once __DIR__ . "/classi/cibo.php";
include_once __DIR__ . "/classi/giocattoli.php";

$category = [
    "cane" => new category('Cane', '<i class="fa-solid fa-dog"></i>'),
    "gatto" => new category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    "uccello" => new category('Uccello', '<i class="fa-solid fa-bird"></i>'),
    "pesce" => new category('Pesce', '<i class="fa-solid fa-fish"></i>')
];
$prodotto = [
    new cibo("Royal Canin", 43.99, $category["cane"], "545g", "Ingredienti: prosciutto, riso"),
    new cibo("Almo Nature", 44.99, $category["cane"], "600g", "Ingredienti: manzo, cereali "),
    new giocattoli("Topini di peluche Trixie", 4.99, $category["gatto"], "Caratteristiche: Morbido", "Dimensioni: 8,5cm x 10cm"),
    new accessori("Voliera Ferplast Bella Casa", 184.99, $category["uccello"], "Materiale: Legno", "Dimensioni: Grande")
];
var_dump($prodotto)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="w-75 mx-auto container-fluid">
        <h1>Boolshop</h1>
        <h5>I nostri prodotti</h5>

        <div class="row">


            <?php foreach ($prodotto as $elem) { ?>
                <div class="col-4 border">
                    <div><?php
                            echo $elem->nome
                            ?></div>
                    <div><?php
                            echo $elem->prezzo
                            ?></div>
                    <span><?php
                            echo $elem->category->nome;
                            echo $elem->category->icona
                            ?></span>

                    <!-- attributi dinamici in base all'elemento -->
                    <?php
                    if (get_class($elem) == "cibo") {
                    ?><p><?php echo $elem->peso_netto ?></p>
                        <p><?php echo $elem->ingredienti ?></p>
                    <?php } else if (get_class($elem) == "accessori") { ?>
                        <p><?php echo $elem->materiale ?></p>
                        <p><?php echo $elem->dimensioni ?></p>
                    <?php
                    } else if (get_class($elem) == "giocattoli") {
                    ?><p><?php echo $elem->caratteristiche ?></p>
                        <p><?php echo $elem->dimensioni ?></p><?php
                                                            } ?>
                </div>
            <?php } ?>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>