<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Confirmation de la création d'un individu</h1>");  
    ?>
    <ul>
        <?php
                //données du tableau
                echo(
                    "
                    <ul>
                        <li>famille_id = ". $results->famille_id ."</li>
                        <li>id = ".$results->id."</li>
                        <li>nom = ".$results->nom."</li>
                        <li>prénom = ".$results->prenom."</li>
                        <li>sexe = ".$results->sexe."</li>
                        <li>père = ".$results->pere."</li>
                        <li>mère = ".$results->mere."</li>
                    </ul>
                ");  
            ?> 
    </ul>                
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>