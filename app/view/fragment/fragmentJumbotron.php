<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_COOKIE["nomFamille"]))
            echo("<h1>" . htmlspecialchars($_COOKIE["nomFamille"]) . "</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->