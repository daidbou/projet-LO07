<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_COOKIE["nom"]) && $_COOKIE["nom"]!="-1")
            echo("<h1>FAMILLE ".strtoupper($_COOKIE["nom"])."</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->