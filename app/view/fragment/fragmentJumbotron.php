<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_COOKIE["nom"]))
            echo("<h1>".$_COOKIE["nom"]."</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->