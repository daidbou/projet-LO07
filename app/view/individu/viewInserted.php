<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Liste des familles</h1>");  
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                $famille_id, $id, $nom, $prenom, $sexe, $pere, $mere;
                <th scope = "col">famille_id</th>
                <th scope = "col">id</th>
                <th scope = "col">nom</th>
                <th scope = "col">prenom</th>
                <th scope = "col">sexe</th>
                <th scope = "col">pere</th>
                <th scope = "col">mere</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //données du tableau
                
                    echo("<tr scope 'row'>
                            <td>{$results->getFamille_id()}</td>
                            <td>{$results->getId()}</td>
                            <td>{$results->getNom()}</td>
                            <td>{$results->getPrenom()}</td>
                            <td>{$results->getSexe()}</td>
                            <td>{$results->getPere()}</td>
                            <td>{$results->getMere()}</td>
                          </tr>
                        ");
                    
            ?> 
        </tbody>
    </table>                  
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>