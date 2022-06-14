<?php
    
    require_once("../model/ModelEvenement.php");
    
    class ControllerEvenement{
        
        public static function evenementReadAll(){
            if(isset($_COOKIE["nomSession"])){
                $results = ModelEvenement::getAllEvenement(htmlspecialchars($_COOKIE['nomSession']));
            }
            else
                $results = NULL;
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
            if($_GET['familleid_id']=='' or $_GET['type']=='' or $_GET['date']=='' or $_GET['lieu']==''){
                $valide = 1;   
            }
            else{
                $results = ModelEvenement::insert(htmlspecialchars($_GET['familleid_id']),htmlspecialchars($_GET['type']),htmlspecialchars($_GET['date']),htmlspecialchars($_GET['lieu']));
                if($results==NULL)
                    $valide = 2;

            }
            include 'config.php';
            $vue = $root . "/app/view/evenement/viewInserted.php";
            if(DEBUG){
                echo("ControllerEvenement : evenementCreated: vue : $vue");
            }
            require($vue);
        }
    }   
?>
