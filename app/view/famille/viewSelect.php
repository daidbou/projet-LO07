<?php require($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
    include $root."/app/view/fragment/fragmentMenu.html";
    include $root."/app/view/fragment/fragmentJumbotron.php";
    ?>
    <h1>Confirmation de la sélection d'une famille</h1>
    <form action="router1.php" method="get">
        <div class="form-group">
            <input type="hidden" name="action" value="familleSelect">
            <label for="nom">Nom :</label>
            <select class="form-control" name="nom" id="nom" style="width:100px">
                <?php 
                    foreach($results as $nom){
                        echo("<option>$nom</option>");
                    }
                ?>
            </select>
        </div>
        <p/>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

<?php include $root."/app/view/fragment/fragmentFooter.html" ?>