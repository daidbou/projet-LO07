<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">
    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
        echo("<h1>Ajout d'un lien parental</h1>");  
    ?>
    <form role="form" method="get" action="router1.php">
        <input type="hidden" name="action" value="lienCreated">
        <div class="form-group">
            <label for="enfant">Sélectionnez un enfant : </label>
            <select name="enfant" id="enfant" class="form-control" style="width:50%" >
                <?php
                    foreach($results as $elements){
                        echo("<option value='{$elements->getFamille_id()}_{$elements->getId()}'>". $elements->getNom()." : ".$elements->getPrenom()."</option>");
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
                    <label for="parent">Sélectionnez un parent : </label>
                    <select name="parent" id="parent" class="form-control" style="width:50%" >
                        <?php
                            foreach($results as $elements){
                                echo("<option value='{$elements->getId()}_{$elements->getSexe()}'>". $elements->getNom()." : ".$elements->getPrenom()."</option>");
                            }
                        ?>
                    </select>
        </div>        
        <button type="submit" class="btn btn-primary"> Go </button>
    </form>                 
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html" ?>

