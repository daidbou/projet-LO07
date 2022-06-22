<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
        echo("<h1>Création d'une famille</h1>");
    ?>

    <form role="form" method="get" action="router1.php">
        <div class="form-group">
            <input type="hidden" name="action" value="individuCreated">
            <label for="nom">Nom ? </label><p/><input type="text" name="nom" style='width:70%' value="roqdi"><p/>
            <label for="prenom">Prénom ? </label><p/><input type="text" name="prenom" style='width:70%' value="amr">
            <div>
            <label for="sexe">Sexe ? </label><p/><input type="radio" name = "sexe" 
                        value="H">Masculin
                <input type="radio" name = "sexe" 
                        value="F">Féminin      
                <p/></div>
        <button class="btn btn-primary" type="submit"> Go </button>
    </form>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>