<?php
    class ControllerFamille{
        public static function familleReadAll($args){
            $results = ModelFamille::getAll();
            include "config.php";
            $vue = $root . "/app/view/famille/viewAll.php";
            if(DEBUG){
                echo("ControllerFamille : familleReadAll : vue : $vue");
            }
            require($vue);
        }
        public static function familleCreate($args){
            
        }
        public static function familleCreated($args){
            
        }
        public static function familleSelect($args){
            
        }
        public static function familleSelected($args){
            
        }
    }
?>