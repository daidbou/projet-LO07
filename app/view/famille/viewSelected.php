<?php require($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
    include $root."/app/view/fragment/fragmentMenu.html";
    include $root."/app/view/fragment/fragmentJumbotron.php";
    ?>
    <h1>Confirmation de la sélection d'une famille</h1>
    <h3>La famille <?php echo("$results->nom ($results->id)") ?> est maintenant sélectionnée.</h3>
</div>

<?php include $root."/app/view/fragment/fragmentFooter.html" ?>

<!--TODO vérifier que results retourne bien le nom et l'id de la famille sélectionnée