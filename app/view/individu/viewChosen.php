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
          echo "<li>Union avec: <a href='router1.php?action=individuChosen&id=$value[id]&idfam=$value[famille_id]'>".$value['nom']." ".$value['prenom']."</a></li>";
      }
                             

         
            ?> 
    </ul>                
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>