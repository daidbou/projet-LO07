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
        
        public static function individuAjout(){
            include 'config.php';
            $vue = $root . "/app/view/individu/viewInsert.php";
            require ($vue);
        }
        
        public static function individuCreated() {
            $idFamille= ModelFamille::getIDfromNom(htmlspecialchars($_GET['nom']));
            if ($idFamille->rowCount() == 0){
             $nameFamilytoInsert= ModelFamille::insert($_GET['nom']);
             $idFamille= ModelFamille::getIDfromNom($nameFamilytoInsert);
                }
            $results= ModelIndividu::insertIndividuFamille($idFamille, $_GET['nom'], $_GET['prenom'], $_GET['sexe']);
            include "config.php";
            $vue = $root . "/app/view/individu/viewInserted.php";
            if(DEBUG){
                echo("ControllerFamille : individuCreated() : vue : $vue");
            }
            require($vue);
    
    }
    }
?>