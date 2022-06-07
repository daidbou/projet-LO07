<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_COOKIE["nomSession"]) && $_COOKIE["nomSession"]!="-1")
            echo("<h1>FAMILLE ".strtoupper($_COOKIE["nomSession"])."</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->