<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Ajout d'un lien parental</h1>");  
    ?>
    <form role="form" method="get" action="router1.php">
        <input type="hidden" name="action" value="lienUnionCreated">
        <div class="form-group">
            <label for="homme">Sélectionnez un homme : </label>
            <select name="homme" id="homme" class="form-control" style="width:50%" >
                <?php
                    foreach($result1 as $elements){
                        echo("<option value='{$elements->getFamille_id()}_{$elements->getId()}'>". $elements->getNom()." : ".$elements->getPrenom()."</option>");
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
                    <label for="femme">Sélectionnez une femme : </label>
                    <select name="femme" id="femme" class="form-control" style="width:50%" >
                        <?php
                            foreach($result2 as $elements){
                                echo("<option value='{$elements->getId()}'>". $elements->getNom()." : ".$elements->getPrenom()."</option>");
                            }
                        ?>
                    </select>
        </div>  
        
        <div class="form-group">
            <label for=union>Sélectitonnez un type d'union</label>
            <select name="union" id="union" class="form-control" style="width:50%">
                <option value="DIVORCE">DIVORCE</option>
                <option value="COUPLE">COUPLE</option>
                <option value="SEPARATION">SEPARATION</option>
                <option value="PACS">PACS</option>
                <option value="MARIAGE">MARIAGE</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date"> Date (AAAA-MM-JJ) ?</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="" value="2001-01-16" style="width:50%">
        </div>

        <div class="form-group">
            <label for="lieu">Lieu ?</label>
            <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Troyes" value="Troyes" style="width:50%">
        </div>

        <button type="submit" class="btn btn-primary"> Go </button>
    </form>                 
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>

