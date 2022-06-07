<?php
    require_once("../model/ModelLien.php");
    class ControllerLien{
        public static function lienReadAll(){
            $results = ModelLien::getAll(htmlspecialchars($_COOKIE['nomSession']));
            include "config.php";
            $vue = $root . "/app/view/lien/viewAll.php";
            if(DEBUG){
                echo("Controllerlien : lienReadAll : vue : $vue");
            }
            require($vue);
        }
    }
?>