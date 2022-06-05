<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Liste des évènements/h1>");  
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr scope="col">
                <th scope = "col">famille_id</th>
                <th scope = "col">id</th>
                <th scope = "col">iid</th>
                <th scope = "col">event_type</th>
                <th scope = "col">event_date</th>
                <th scope = "col">event_lieu</th>
            </tr>
        </thead>
        <tbody>
            <?php/*
                //données du tableau
                foreach($results as $element){
                    echo("<tr scope 'row'>
                            <td>$element->famille_id</td>
                            <td>$element->id</td>
                            <td>$element->iid</td>
                            <td>$element->event_type</td>
                            <td>$element->event_date</td>
                            <td>$element->event_lieu</td>
                          </tr>
                        ");
                    }*/
            ?> 
        </tbody>
    </table>                  
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>

