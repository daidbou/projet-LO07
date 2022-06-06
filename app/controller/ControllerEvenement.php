<?php
    
    require_once("../model/ModelEvenement.php");
    
    class ControllerEvenement{
        
        public static function evenementReadAll(){
            $results = ModelEvenement::getAllEvenement();
            include "config.php";
            $vue = $root . "/app/view/evenement/ViewAll.php";
            if(DEBUG){
                echo("ControllerFamille : evenementReadAll : vue : $vue");
            }
            require($vue);
        }
        /*
        public static function evenementCreate(){
            
        }
        public static function evenementCreated(){
            
        }
        */
    }
?>