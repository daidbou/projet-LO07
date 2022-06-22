<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Liste des individus</h1>");  
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr scope="col">
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
                if($results!=NULL){
                    foreach($results as $row){
                        echo("<tr scope 'row'>");
                        foreach($row as $key=>$value){
                            echo("<td>$value");
                        }
                        echo("</tr>"); 
                    }    
                }
  
            ?> 
        </tbody>
    </table>                  
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>

