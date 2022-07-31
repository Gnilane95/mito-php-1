<?php
$page='home';
$title="Accueil";
include('partials/_header.php')
?>
    <main class="px-48">
        <h2 class="font-black text-5xl text-center pt-24 pb-10">Qui sommes-nous ?</h2>
        <p class="font-semibold pb-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tempora nam hic laborum officia, ex, dolor soluta officiis temporibus esse laboriosam maxime nostrum? Nulla consequatur ea sit dolorem nostrum ullam, facilis at repellendus nesciunt alias provident! Dignissimos itaque beatae expedita totam quis at corrupti!
        </p>
        <div class="flex">
            <img src="img/home-mito.jpeg" alt="" class="max-w-xl">
            <p class="pl-10 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tempora nam hic laborum officia, ex, dolor soluta officiis temporibus esse laboriosam maxime nostrum? Nulla consequatur ea sit dolorem nostrum ullam, facilis at repellendus nesciunt alias provident! Dignissimos itaque beatae expedita totam quis at corrupti!</p>
        </div>
        <h2 class="font-black text-5xl text-center pt-24 pb-10">Nos services</h2>
        <div class="flex justify-center gap-10">
            <div>
                <img src="img/gift-box.png" alt="" class="w-16">
                <p class="font-medium">Emballage</p>
            </div>
            <div>
                <img src="img/fast-delivery.png" alt="" class="w-16">
                <p class="font-medium">Livraison</p>
            </div>
            <div>
                <img src="img/advice.png" alt="" class="w-16">
                <p class="font-medium">Conseils</p>
            </div>
        </div>
    </main>

<?php
include('partials/_footer.php')
?>