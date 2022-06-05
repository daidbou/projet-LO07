<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.html";

        if($valide!=1){
            echo(
                "<h1>Confirmation de la création d'une famille</h1>
                <ul>
                    <li>nom = {$_GET['nom']}</li>
                </ul>
            ");
        }
    ?>

</div>
