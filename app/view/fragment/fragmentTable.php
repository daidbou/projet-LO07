<!-- debut fragmentTable -->

<table class="table table-bordered table-striped">
    <thead>
        <tr scope="col">
            <?php
                //metadonée du tableau
                for($i=0;$i<$results->columCount();$i++){
                    echo("<th> $results->getColumnMeta($i)['name'] </th>");
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            //données du tableau
            foreach($results as $element){
                echo("<tr scope 'row'>");
                for($i=0;$i<$results->rowCount();$i++){
                    echo("<td> $element[$i] </td>");
                }
                echo("</tr>");
            }
        ?> 
    </tbody>
</table>

<!-- fin FragmentTable -->