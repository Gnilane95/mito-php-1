<?php
$currentPage = $_SERVER["REQUEST_URI"];
//var_dump($currentPage);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Mito - <?= $title ?></title>
</head>
<body>
    <header>
        <nav class="flex justify-between px-20 fixed w-full z-50 bg-white py-8">
            <div>
                <img src="img/mito.png" alt="" class="w-16">
            </div>
            <ul class="flex font-semibold">
                <li class="<?php echo $currentPage === "/php/mito-php/index.php" ? "active" : "" ?>">
                    <a href="index.php" class="pr-10 ">Home</a>
                </li>
                <li class="<?php echo $currentPage === "/php/mito-php/produits.php" ? "active" : "" ?>">
                    <a href="produits.php" class="pr-10 ">Produits</a>
                </li>
                <li class="<?php echo $currentPage === "/php/mito-php/contact.php" ? "active" : "" ?>">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="bg-cover relative bg-[url('img/mito-header.jpeg')] p-72" id="hero-img">
            <div class=" absolute top-0 bottom-0 bg-black/50 p-72 max-w-full left-0 right-0">
                <div class="absolute left-96 top-60">
                    <p class="text-green-300 font-semibold text-lg">Le leader français du Bio</p>
                    <p class="text-white font-black text-7xl">Bienvenue chez Mito</p>
                </div>
            </div>
            
        </div>
    </header>