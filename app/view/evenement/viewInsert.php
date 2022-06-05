<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php

        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
        echo("<h1>Ajout d'un évènement</h1>")
    ?>

    <form role="form" method="get" action="router1.php">
        <input type="hidden" name="action" value="evenementCreated">
        
        <!--selection de l'individu-->    
        <div class="form-group">
            <label for="id">Sélectionnez un individu : </label>
                <select name="id" id="id" class="form-control" style="width:100px" >
                    <?php
                        foreach($results as $elements){
                            echo("<option> $elements->famille_id : $elements->id</option>");
                        }
                    ?>
                </select>
        </div>

        <!--selection de l'évènement-->
        <div class="form-group">            
            <label for="evenement">Sélectionnez un type d'évènement :</label>
            <select name="evenement" id="evenement" class="form-control" style="width:100px">
                    <option>NAISSANCE</option>
                    <option>DECES</option>
            </select>
        </div>

        <!--selection date-->
        <div class="form-group">
            <label for="date"> Date (AAAA-MM-JJ) ?</label>
            <input type="date" format="aaaa-mm-dd" class="form-control" id="date" name="date" placeholder="" value="2001-01-16">
        </div>

        <!--selection lieu-->
        <div class="form-group">
            <label for="lieu">Lieu ?</label>
            <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Troyes">
        </div>
        
        <!--submit-->
        <button type="submit" class="btn-primary">Go</button>
    </form>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>

<!--TODO ajouter le routage et vérifier que tout fonctionne
connecter au controller
tester une fois le model pret
model : results doit retourner famille_id et id
utiliser explode() pour obtenir famille_id et id a partir de l'input