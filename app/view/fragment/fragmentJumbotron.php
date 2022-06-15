<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        if(isset($_SESSION["nomSession"]) && $_SESSION["nomSession"]!="-1")
            echo("<h1>FAMILLE ".strtoupper($_SESSION["nomSession"])."</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->