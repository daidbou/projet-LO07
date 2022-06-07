<?php
    
    require_once("../model/ModelEvenement.php");
    
    class ControllerEvenement{
        
        public static function evenementReadAll(){
            $results = ModelEvenement::getAllEvenement(htmlspecialchars($_COOKIE['nomSession']));
            include "config.php";
            $vue = $root . "/app/view/evenement/viewAll.php";
            if(DEBUG){
                echo("ControllerEvenement : evenementReadAll : vue : $vue");
            }
            require($vue);
        }
        
        public static function evenementCreate(){
            $results = ModelIndividu::getAll();
            include "config.php";
            $vue = $root . "/app/view/evenement/viewInsert.php";
            if(DEBUG){
                echo("ControllerEvenement : evenementCreate: vue : $vue");
            }
            require($vue);
        }
        public static function evenementCreated(){
            $valide = 0;
            if($_GET['familleid_id']=NULL or $_GET['type']=NULL or $_GET['date']=NULL or $_GET['lieu']=NULL)
            $results = ModelEvenement::insert(htmlspecialchars($_GET['familleid_id']),htmlspecialchars($_GET['type']),htmlspecialchars($_GET['date']),htmlspecialchars($_GET['lieu']));
            var_dump($results);
            include 'config.php';
            $vue = $root . "/app/view/evenement/viewInserted.php";
            if(DEBUG){
                echo("ControllerEvenement : evenementCreated: vue : $vue");
            }
            require($vue);
        }
    }   
?>