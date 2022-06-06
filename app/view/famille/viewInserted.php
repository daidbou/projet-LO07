<?php require ($root . "/app/view/fragment/fragmentHeader.html"); ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";

        
        echo(
            "<h1>Confirmation de la création d'une famille</h1>
            <ul>
                <li>nom = $results</li>
            </ul>
        ");
        
    ?>

</div>

<!--TODO vérifier que results retourne bien le nom de la famille créée