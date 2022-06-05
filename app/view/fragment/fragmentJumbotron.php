<!-- début fragmentJumbotron -->

<div class="jumbotron">
    <?php 
        setcookie("NomSession", "bite", 3600);
        echo $_COOKIE["nomSession"];
        if(isset($_COOKIE["nomSession"]))
            echo("<h1>".$_COOKIE["nomSession"]."</h1>");
        else
            echo("<h1>Pas de famille sélectionnée</h1>")
    ?>
</div>
<p/>

<!-- fin fragmentJumbotron -->