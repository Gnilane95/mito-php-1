<?php
$page='contact';
$title="Contact";
include('partials/_header.php');


?>
    <main class="px-48">
        <h2 class="font-black text-5xl text-center pt-24 pb-10">Nous contacter</h2>
        <p class="font-semibold pb-24 px-28 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tempora nam hic laborum officia, ex, dolor soluta officiis temporibus esse laboriosam maxime nostrum? Nulla consequatur ea sit dolorem nostrum ullam, facilis at repellendus nesciunt alias provident! Dignissimos itaque beatae expedita totam quis at corrupti!
        </p> 
        <form action="" method="POST" class="bg-gray-100 p-7 mx-56 rounded-lg">
            <div class="mb-5">
                <label for="name" class="block font-black text-black/60 text-md pb-3">Nom</label>
                <input name="nom" type="text" placeholder="Votre nom" class="w-full border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2">
            </div>
            <div>
                <label for="message" class="block font-black text-black/60 text-md pb-3">Message</label>
                <textarea name="message" type="text" placeholder="Message" class="w-full pb-52 border border-gray-300 text-gray-900 text-md font-semibold rounded-lg p-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-2 py-3 rounded-md mt-5"> Envoyer</button>
        </form>
        <div class="mt-10">
            <img src="img/map-img.png" alt="" class="px-56 ">
        </div>
    </main>

<?php
include('partials/_footer.php')
?>