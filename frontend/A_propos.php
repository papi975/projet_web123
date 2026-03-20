<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php require_once "Template.php"; ?>

<?php ob_start(); ?>

<!-- Le reste de votre contenu ici -->
 <div class="contenu">
    <div class="pirata-one-regular">
        <h1><b>About Three SN</b></h1>
        <p class="text">
        Nous sommes trois étudiants venus du même continent et réunis dans un même pays, 
        mais le destin a voulu que nos chemins se croisent au sein d’une université : 
        l’Université du Littoral Côte d’Opale. Nous suivons une formation très utile 
        dans un monde fortement influencé par ce phénomène. Le nom de cette formation 
        est l’informatique. Pour nous, personnellement, l’informatique est un petit 
        seigneur de ce monde, à travers ses multiples domaines, tous indispensables à 
        la vie de l’homme. Elle est influente et présente partout.
        Aujourd’hui, nous sommes en L2 Informatique, mais nous rêvons de devenir un 
        jour des ingénieurs très reconnus, pas seulement dans une région, mais dans le monde entier.
        Ce projet représente un pas vers notre objectif. C’est pourquoi nous y mettons 
        toute notre énergie et surtout notre passion. Nous n’avons pas choisi l’informatique 
        pour le simple plaisir, mais par amour. Nous savons ce que cette discipline peut 
        accomplir pour améliorer la vie de nombreuses personnes.
        Voilà donc notre premier projet que nous avons entrepris ensemble. Nous espérons 
        que vous ressentirez notre engouement à travers nos mots et à travers ce site.
        </p>
</div>

<?php $content=ob_get_clean() ?>


<?php Template::render($content) ?>