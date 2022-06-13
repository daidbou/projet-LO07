<?php
    require_once("../model/ModelIndividu.php");
    class ControllerIndividu{

        public static function individuReadAll(){
            $results = ModelIndividu::getAllFamily(htmlspecialchars($_COOKIE['nomSession']));
            include "config.php";
            $vue = $root . "/app/view/individu/viewAll.php";
            if(DEBUG){
                echo("ControllerIndividu : individuReadAll : vue : $vue");
            }
            require($vue);
        }
    }
?>