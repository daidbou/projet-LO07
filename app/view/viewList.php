<?php include "$root . app/view/fragment/fragmentHeader.html" ?>

<div class="container">

    <?php
        include "$root . app/view/fragment/fragmentMenu.html";
        include "$root . app/view/fragment/fragmentJumbotron.php";

        echo("$title");
        
        include "$root. app/view/fragment/fragmentTable.php";
    ?>

</div>

<?php include "$root . app/view/fragment/fragmentFooter.html" ?>

