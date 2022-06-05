<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Liste des familles</h1>");  
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr scope="col">
                <th scope = "col">id</th>
                <th scope = "col">nom</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //données du tableau
                foreach($results as $element){
                    echo("<tr scope 'row'>
                            <td>{$element->getId()}</td>
                            <td>{$element->getNom()}</td>
                          </tr>
                        ");
                    }
            ?> 
        </tbody>
    </table>                  
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>

