<?php
$page='contact';
$title="Contact";
include('partials/_header.php');
include('function.php');

$error = [];
$errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
$success = false ;

#debug_array($_FILES["files"]);

if (isset($_FILES["files"]) && $_FILES["files"] ["error"] == 0) {
    $files_name = $_FILES ["files"] ["name"];
    $files_type = $_FILES ["files"] ["type"];
    $files_tmp = $_FILES ["files"] ["tmp_name"];
    $files_size = $_FILES ["files"] ["size"];
    
    $sizeMax = 2000000 ;
    if ($files_size <= $sizeMax) {
       $fileInfo = pathinfo($files_name);
       $extension = $fileInfo ["extension"];
       $allowed_extensions = ["jpg","jpeg","png","svg", "pdf"];
       if (in_array($extension, $allowed_extensions)) {
        move_uploaded_file($_FILES ["files"] ["tmp_name"], "files_uploaded/".basename($files_name));
       }else {
        $error["files"] = "<span class=text-red-500>Extension non autorisée.</span>";
       }
    }else {
        $error["files"] = "<span class=text-red-500>Fichier trop lourd</span>";
    }

    if (count($error)== 0) {
        $success = true;
    }
}

?>

<main class="px-48">
        <h2 class="font-black text-5xl text-center pt-24 pb-10">Télécharger un fichier</h2>
        <p class="font-semibold pb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id facere, quis, totam voluptatem modi expedita necessitatibus minus animi ullam iusto delectus earum? Quas aperiam facilis consequuntur repellat, odit distinctio facere temporibus asperiores dolor magni dicta fugiat maxime? Quasi consequuntur ex velit molestiae repellendus! Accusantium explicabo et alias perferendis! Asperiores, tempore! Incidunt omnis consequuntur, numquam sint perferendis perspiciatis modi nam ullam.</p>
        <?php 
			if ($success===true){ ?>
			<div class="alert alert-success shadow-lg mx-auto mt-3" role="alert">
				Votre fichier a bien été envoyé.
			</div>
		<?php }else { ?>
        <form action="" method="POST" class="mx-auto bg-gray-100 p-10 rounded-lg" enctype="multipart/form-data">
            <div class="w-full">
                <label for="files" class="block text-lg font-medium pb-3">Veuillez télécharger le fichier</label>
                <input type="file" name="files" id="" class="input input-bordered w-full max-w-lg p-2">
                <p>
                    <?php
                    if (!empty($error["files"])) {
                        echo $error["files"];
                    }
                    ?>
                </p>
            </div>

            <input type="submit" name="submited" value="Envoyer" class="btn btn-success mt-5">
        </form>
        <?php } ?>
    </main>

<?php
include('partials/_footer.php')
?>