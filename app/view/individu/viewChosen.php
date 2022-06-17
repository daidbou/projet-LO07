<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php

        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
    
    
    echo "<h1> $nomInd $prenomInd </h1>"
?>
    <ul>
        <?php
                //données du tableau
                echo(
                    "
                    <ul>
                        <li>Né le $dateNaiss à $lieuNaiss .</li>
                        <li>Décès le $dateDeces à $lieuDeces .</li>
                    </ul>
                    
    <h2>Parents</h2>
    
<ul>
                        <li>Père: $nomPere $prenomPere .</li>
                        <li>Mère: $nomMere $prenomMere .</li>
                    </ul>
                ");  
            ?> 
    </ul>                
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>