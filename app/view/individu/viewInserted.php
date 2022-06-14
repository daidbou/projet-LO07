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
                        <li>individu_id = ".$results->id."</li>
                        <li>event_id = ".$results->nom."</li>
                        <li>event_type = ".$results->prenom."</li>
                        <li>event_date = ".$results->sexe."</li>
                        <li>event_lieu = ".$results->pere."</li>
                        <li>event_lieu = ".$results->mere."</li>
                    </ul>
                ");  
            ?> 
    </ul>                
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>