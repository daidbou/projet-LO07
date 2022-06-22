<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php

        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
        echo("<h1>Selection d'un individu</h1>");
    ?>

    <form role="form" method="get" action="router1.php">
        <input type="hidden" name="action" value="individuChosen">
        
        <!--selection de l'individu-->    
        <div class="form-group">
            <label for="page">Sélectionnez un individu : </label>
                <select name="page" id="page" class="form-control" style="width:50%" >
                    <?php
                        foreach($results as $elements){
                            echo("<option value='{$elements["famille_id"]}_{$elements["id"]}_{$elements["nom"]}_{$elements["prenom"]}'>". $elements["nom"]." : ".$elements["prenom"]."</option>");
                        }
                    ?>
                </select>
        </div>

        
        <!--submit-->
        <button type="submit" class="btn btn-primary"> Go </button>
    </form>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>

<!--TODO ajouter le routage et vérifier que tout fonctionne
connecter au controller
tester une fois le model pret
model : results doit retourner famille_id et id
utiliser explode() pour obtenir famille_id et id a partir de l'input
