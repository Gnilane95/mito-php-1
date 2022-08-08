<?php
$page='contact';
$title="Contact";
include('partials/_header.php');
include('function.php');

$error=[];
$errorMessage= "<span class=text-red-500>*Ce champs est obligatoire</span>";

$success = false;

if (!empty($_POST["submited"])) {
    $nom= trim(htmlspecialchars($_POST["nom"]));
    $email= trim(htmlspecialchars($_POST["email"]));
    $message= trim(htmlspecialchars($_POST["message"]));
    $age=trim(htmlspecialchars($_POST["age"]));
    $color=trim(htmlspecialchars($_POST["color"]));
    $job=trim(htmlspecialchars($_POST["job"]));
    #debug_array ($job);

    if (!empty($nom)){
        if (strlen($nom)<=3){
           $error["nom"]= "<span class=text-red-500>3 caractères minimum</span>";
        }elseif (strlen($nom)>30) {
            $error["nom"]= "<span class=text-red-500>30 caractères maximum</span>";
        }

    }else{
        $error["nom"]=$errorMessage;
    }

    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error["email"]="<span class=text-red-500>E-mail invalide </span>";
        }
    }else{
        $error["email"]=$errorMessage;
    }

    if (!empty($message)) {
        if (strlen($message)<30) {
            $error["message"]= "<span class=text-red-500>30 caractères minimum</span>";
        }elseif (strlen($message)>300) {
            $error["message"]= "<span class=text-red-500>300 caractères maximum</span>";
        }
    }else{
        $error["message"]=$errorMessage;
    }

    if(!empty($age)){
        if(!is_numeric($age)){
            $error["age"] = "<span class=text-red-500>Veuillez rentrez un chiffre</span>";
        }elseif ($age<18) {
           $error["age"] = "<span class=text-red-500>Vous êtes trop jeune</span>";
        }
    }else{
        $error["age"]=$errorMessage;
    }

    if (empty($color)){
        $error["color"]=$errorMessage;
    }

    if (!empty($job)) {
        $job = $_POST["job"];
        if ($job == "Dev Front end" || $job == "Dev Back end") {
            echo "";
        }else {
            $error["job"] = "Veuillez sélectionner un poste.";
        }
    }else {
        $error["job"]=$errorMessage;
    }

    if (count($error)==0){
        $success = true;
    }
}

?>
    <main class="px-48">
        <h2 class="font-black text-5xl text-center pt-24 pb-10">Nous contacter</h2>
        <p class="font-semibold pb-24 px-28 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tempora nam hic laborum officia, ex, dolor soluta officiis temporibus esse laboriosam maxime nostrum? Nulla consequatur ea sit dolorem nostrum ullam, facilis at repellendus nesciunt alias provident! Dignissimos itaque beatae expedita totam quis at corrupti!
        </p> 
        <?php if ($success==true) { ?>
            <div class="p-4 mx mb-4 w-auto text-sm text-green-700 bg-green-100 rounded-lg text-center" role="alert">
                Votre message a bien été envoyé
            </div>
        <?php } else { ?>
            <form action="" method="POST" class="bg-gray-100 p-7 mx-56 rounded-lg">
            <div class="mb-5">
                <label for="nom" class="block font-black text-black/60 text-md pb-3">Nom</label>
                <input name="nom" type="text" value="<?php if (!empty($_POST["nom"])) {echo $_POST["nom"];}?>" placeholder="Votre nom" class="w-full border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2">
                <p><?php
                if (!empty($error["nom"])) {
                    echo $error["nom"];
                }?></p>
            </div>
            <div class="mb-5">
                <label for="email" class="block font-black text-black/60 text-md pb-3">E-mail</label>
                <input name="email" type="email" value="<?php if (!empty($_POST["email"])) {echo $_POST["email"];}?>" placeholder="toto@gmail.com" class="w-full border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2">
                <p><?php
                if (!empty($error["email"])) {
                    echo $error["email"];
                }?></p>
            </div>
            <div class="mb-5">
                <label for="age" class="block font-black text-black/60 text-md pb-3">Age</label>
                <input name="age" type="number" placeholder="" value="<?php if (!empty($_POST["age"])) {echo $_POST["age"];}?>" class="w-full h-10 border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-4">
                <p><?php
                if (!empty($error["age"])) {
                    echo $error["age"];
                }?></p>
            </div>
            <div class="mb-5">
                <?php
                $colors = [
                    "vert" => "Vert",
                    "jaune" => "Jaune",
                    "rouge" => "Rouge",
                    "bleu" => "Bleu",
                    "marron" => "Marron",
                    "violet" => "Violet",
                    "gris" => "Gris",

                ];
                ?>
                <select name="color" class="w-full border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-4">
                    <option value="">Choisir une couleur</option>
                    <?php foreach ($colors as $key => $color) : ?>
                        <option value="<?= $key ?>"
                        <?php 
                        if (!empty($_POST["color"])){
                            if ($_POST["color"]==$key) echo 'selected = "selected"';
                        }
                        ?>>
                        <?= $color ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <p>
                    <?php
                    if (!empty($error["color"])){
                        echo $error ["color"];
                    }
                    ?>
                </p>
            </div>
            <div class="mb-5">
                <label for="message" class="block font-black text-black/60 text-md pb-3">Message</label>
                <textarea name="message" type="text" placeholder="Message" class="w-full pb-52 border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2">
                    <?php if (!empty($_POST["message"])) {echo $_POST["message"];}?>
                </textarea>
                <p><?php
                if (!empty($error["message"])) {
                    echo $error["message"];
                }?></p>
            </div>
            <div class="mb-5">
                <div class="flex items-center">
                    <input name="job" type="radio" value="Dev Front end" class="radio checked:bg-red-500 mr-3" checked>
                    <label for="job" class="label cursor-pointer">Dev Front end</label>
                </div>
                <div class="flex items-center">
                    <input name="job" type="radio" value="Dev Back end" class="radio checked:bg-blue-500 mr-3" >
                    <label for="job" class="label cursor-pointer">Dev Back end</label>
                </div>
                <p><?php
                if (!empty($error["job"])) {
                    echo $error["job"];
                }?></p>
            </div>
            
            <input type="submit" value="Envoyer" name="submited"class="cursor-pointer bg-blue-500 text-white px-2 py-3 rounded-md mt-5">
        </form>

        <?php } ?>
        
        <div class="mt-10">
            <img src="img/map-img.png" alt="" class="px-56 ">
        </div>
    </main>

<?php
include('partials/_footer.php')
?>