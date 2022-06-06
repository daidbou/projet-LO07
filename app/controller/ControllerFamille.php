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
            $results = ModelFamille::insert(htmlspecialchars($_GET['nom']));
            include 'config.php';
            
            $_COOKIE["nom"] = $results;
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
            $valide=0;
            if($_GET["nom"]==$_COOKIE["nom"])
                $valide=1;
            else
                $_COOKIE["nom"] = $_GET["nom"];
            include 'config.php';
            $vue = $root . "/app/view/famille/viewInserted.php";
            require($vue);
        }
    }
?>