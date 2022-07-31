<?php
$title="Submit";
include('partials/_header.php');
include ('function.php');
?>

<main>
    <?php
    if (empty($_POST ['nom'])){
        echo "Veuillez entrer votre nom.";
    } else{ ?>
 
  <h1 class="text-center">Message du formulaire</h1>
  <p>Nom:<?php protect_input ('nom') ?></p>
  <p>Message:<?php protect_input ('message')?></p>
     
  <?php } ?>
</main>

<?php
include('partials/_footer.php')
?>