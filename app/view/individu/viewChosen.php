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
                        
                    <ul>\n<li>Père : <a href='router1.php?action=individuChosen&id=$idPere&idfam=$idfam'>".$nomPere." ".$prenomPere."</a></li>
                        <li>Mère : <a href='router1.php?action=individuChosen&id=$idMere&idfam=$idfam'>".$nomMere." ".$prenomMere."</a></li>
                                    
                                
                                        </ul>
                        
                    <h2>Unions et Enfants</h2>
                        <ul>

                "); 
        foreach ($listeComp as $value) {
            echo "<li>Union avec: <a href='router1.php?action=individuChosen&id={$value['id']}&idfam={$value['famille_id']}'>".$value['nom']." ".$value['prenom']."</a></li>";
            echo("<ol>");
            foreach($listeEnfant as $enfant){
                if(($enfant['mere']==$value["id"] and $value["id"]!=0 and $value["sexe"]=="F") or ($enfant["pere"]==$value["id"]) and $value["id"]!=0and $value["sexe"]=="H"){
                    echo("<li>Enfant : <a href='router1.php?action=individuChosen&id={$enfant['id']}&idfam={$enfant['famille_id']}'> {$enfant['nom']} {$enfant['prenom']} </a></li>");
                }
            }
            echo("</ol>");
            echo("<br>");
        }                 
         echo("</ul>")
            ?>          
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>