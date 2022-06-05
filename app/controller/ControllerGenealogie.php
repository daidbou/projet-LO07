<?php 
    class ControllerGenealogie{

        public static function accueil(){
            include "config.php";
            $vue = $root . "/app/view/viewAccueil.php";
            if (DEBUG){
                echo("ControllerGenealogie : accueil : vue = $vue");
            }
            require ($vue);
        }
    }
?>  