<?php require ($root . "/app/view/fragment/fragmentHeader.html") ?>

<div class="container">

    <?php
        include $root . "/app/view/fragment/fragmentMenu.html";
        include $root . "/app/view/fragment/fragmentJumbotron.php";
    
        echo("<h1>Création d'une famille</h1>")
    ?>

    <form role="form" method="get" action="router1.php">
        <div class="form-group">
            <input type="hidden" name="action" value="familleCreated">
            <label for="nom">nom : </label><input type="text" name="nom" size="10" value="bounliane">
        </div>
        <p/>
        <button type="submit" clas="btn btn-primary">Go</button>
    </form>
</div>
<?php include $root . "/app/view/fragment/fragmentFooter.html"?>

    
    


