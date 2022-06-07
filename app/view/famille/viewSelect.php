<?php require($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
    include $root."/app/view/fragment/fragmentMenu.html";
    include $root."/app/view/fragment/fragmentJumbotron.php";
    ?>
    <h1>Confirmation de la sélection d'une famille</h1>
    <form action="router1.php" method="get">
    <input type="hidden" name="action" value="familleSelected">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <select class="form-control" name="nom" id="nom" style="width:70%">
                <?php 
                    foreach($results as $element){
                        echo("<option>".$element->getNom()."</option>");
                    }
                ?>
            </select>
        </div>
        <p/>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

<?php include $root."/app/view/fragment/fragmentFooter.html" ?>

<!--TODO ajouter le routage et vérifier que tout fonctionne
connecter au controller