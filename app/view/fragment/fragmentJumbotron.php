<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_COOKIE["nomFamille"]))
            echo("<h1>" . htmlspecialchars($_COOKIE["nomFamille"]) . "</h1>");
        else
            echo("Pas de famille sélectionnée")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->