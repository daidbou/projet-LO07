<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.html";

        if($valide!=1){
            echo(
                "<h1>Confirmation de la création d'un évènement</h1>
                <ul>
                    <li>famille_id = $results->famille_id</li>
                    <li>individu_id = $results->iid</li>
                    <li>event_id = $results->id</li>
                    <li>event_type = $results->event_type</li>
                    <li>event_date = $results->event_date</li>
                    <li>event_lieu = $results->event_lieu</li>
                </ul>
            ");
        }
    ?>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>

<!--TODO vérifier que results retourne bien le nom de la famille créée

a faire retourner result qui est une query dans model