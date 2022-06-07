<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
        echo("<h1>Création d'une famille</h1>");
    ?>

    <form role="form" method="get" action="router1.php">
        <div class="form-group">
            <input type="hidden" name="action" value="familleCreated">
            <label for="nom">nom : </label><p/><input type="text" name="nom" style='width:70%' value="bounliane">
        </div>
        <p/>
        <button class="btn btn-primary" type="submit"> Go </button>
    </form>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>

<!--TODO ajouter le routage et vérifier que tout fonctionne
connecter au controller
tester une fois le model pret