<?php
$page='contact';
$title="Contact";
include('partials/_header.php');

$error=[];
$errorMessage= "<span class=text-red-500>*Ce champs est obligatoire</span>";

$success = false;

if (!empty($_POST["submited"])) {
    $nom= trim(htmlspecialchars($_POST["nom"]));
    $email= trim(htmlspecialchars($_POST["email"]));
    $message= trim(htmlspecialchars($_POST["message"]));

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
            <div>
                <label for="message" class="block font-black text-black/60 text-md pb-3">Message</label>
                <textarea name="message" type="text" placeholder="Message" class="w-full pb-52 border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2">
                    <?php if (!empty($_POST["message"])) {echo $_POST["message"];}?>
                </textarea>
                <p><?php
                if (!empty($error["message"])) {
                    echo $error["message"];
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