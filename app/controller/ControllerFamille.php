<?php
    require_once("../model/ModelFamille.php");

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
            include 'config.php';
            $vue = $root . "/app/view/famille/viewInsert.php";
            require ($vue);
        }
        public static function familleCreated(){
            $valide = 0;
            if($_GET['nom']=='')
                $valide = 1;
            else{
                $results = ModelFamille::insert(htmlspecialchars($_GET['nom']));
                if($results!=-1){
                    $_SESSION['nomSession'] = $_GET['nom'];
                }
                    
                else
                    $valide = 2;
            }
            include 'config.php';
            $vue = $root . "/app/view/famille/viewInserted.php";
            require($vue);
        }
        public static function familleSelect(){
            $results = ModelFamille::getAll();
            include 'config.php';
            $vue = $root . "/app/view/famille/viewSelect.php";
            require($vue);


        }
        public static function familleSelected(){
            $results = ModelFamille::getOne(htmlspecialchars($_GET['nom']));
            $_SESSION['nomSession'] = $_GET['nom'];
            include 'config.php';
            $vue = $root . "/app/view/famille/viewSelected.php";
            require($vue);
        }
    }
?>