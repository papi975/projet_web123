<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php require_once "Template.php"; ?>

<?php ob_start(); ?>

<div class="full-width-image">
    <img src="asset/food4.jpeg" alt="Sunugal">
</div>

<!-- Le reste de votre contenu ici -->
 <div class="contenu">

</div>

<?php $content=ob_get_clean() ?>


<?php Template::render($content) ?>