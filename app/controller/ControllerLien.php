<?php
    require_once("../model/ModelLien.php");
    class ControllerLien{

        public static function lienReadAll(){
            if(isset($_COOKIE["nomSession"]))
                $results = ModelLien::getFamily(htmlspecialchars($_COOKIE['nomSession']));
            else    
                $results = NULL;
            include "config.php";
            $vue = $root . "/app/view/lien/viewAll.php";
            if(DEBUG){
                echo("Controllerlien : lienReadAll : vue : $vue");
            }
            require($vue);
        }

        public static function lienCreate(){
            $results = ModelIndividu::getAll();
            include "config.php";
            $vue = $root . "/app/view/lien/viewCreate.php";
            if(DEBUG){
                echo("Controllerlien : lienCreate : vue : $vue");
            }
            require($vue);
        }

        public static function lienCreated(){
            $results = ModelIndividu::insert($_GET['enfant'],$_GET['parent']);
            include "config.php";
            $vue = $root . "/app/view/lien/viewCreated.php";
            if(DEBUG){
                echo("Controllerlien : lienCreated : vue : $vue");
            }
            require($vue);
        }

        public static function lienUnionCreate(){
            $result1 = ModelIndividu::getSexeAll('H');
            $result2 = ModelIndividu::getSexeAll('F');
            include "config.php";
            $vue = $root . "/app/view/lien/viewUnionCreate.php";
            if(DEBUG){
                echo("Controllerlien : lienUnionCreate : vue : $vue");
            }
            require($vue);
        }

        public static function lienUnionCreated(){
            $results = ModelLien::insert($_GET['homme'], $_GET['femme'], $_GET['union'], $_GET['date'], $_GET['lieu']);
            include "config.php";
            $vue = $root . "/app/view/lien/viewUnionCreated.php";
            if(DEBUG){
                echo("Controllerlien : lienUnionCreated : vue : $vue");
            }
            require($vue);
        }
    }
?>