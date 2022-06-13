<?php require ($root . "/app/view/fragment/fragmentHeader.html"); ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";

        
        echo("<h1>Confirmation de l'ajout d'un lien parental</h1>
            <ul>");
        foreach($results as $key=>$value){
            echo("<li>".$key." : ".$value."</li>");
        }
        echo ('</ul>');
    ?>

</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>