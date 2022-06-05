<?php
    require_once($root."/app/model/ModelFamille.php");

    class ControllerFamille{
        
        public static function familleReadAll(){
            $results = ModelFamille::getAll();
            include "config.php";
            $vue = $root . "/app/view/famille/viewAll.php";
            if(DEBUG){
                echo("ControllerFamille : familleReadAll : vue : $vue");
            }
            require($vue);
        }
        public static function familleCreate(){
            
        }
        public static function familleCreated(){
            
        }
        public static function familleSelect(){
            
        }
        public static function familleSelected(){
            
        }
    }
?>