<?php
    require_once("../model/ModelIndividu.php");
    class ControllerIndividu{

        public static function individuReadAll(){
            if(isset($_SESSION["nomSession"]))
                $results = ModelIndividu::getAllFamily(htmlspecialchars($_SESSION['nomSession']));
            else
                $results = NULL;
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
            if ($idFamille == NULL){
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
    
    public static function individuChoose(){
            if(isset($_SESSION["nomSession"]))
                $results = ModelIndividu::getAllFamily(htmlspecialchars($_SESSION['nomSession']));
            
            else
                $results = NULL;
            include "config.php";
            $vue = $root . "/app/view/individu/viewChoose.php";
            if(DEBUG){
                echo("ControllerIndividu : individuReadAll : vue : $vue");
            }
            require($vue);
        }
        
        public static function individuChosen(){
           $choix=$_GET['page'];
           $choix = explode("_", $choix);
           $idfam=$choix[0];
           $idind=$choix[1];
           $nomInd=$choix[2];
           $prenomInd=$choix[3];
                   
           $idNaiss= ModelEvenement::getNaissIndividu($idfam, $idind);
           if ($idNaiss == NULL){
             $dateNaiss= '?';
             $lieuNaiss= '?';
            } else { $dateNaiss= $idNaiss->event_date;
             $lieuNaiss= $idNaiss->event_lieu;                
            }
            
            $idDeces=ModelEvenement::getDecesIndividu($idfam, $idind);
           if ($idDeces == NULL){
             $dateDeces= '?';
             $lieuDeces= '?';
            } else { $dateDeces= $idDeces->event_date;
             $lieuDeces= $idDeces->event_lieu;                
            }
            
            $infoInd= ModelIndividu::getIndividu($idfam, $idind);
            $idPere=$infoInd->pere;
            $idMere=$infoInd->mere;
            $infoInd= ModelIndividu::getIndividu($idfam, $idPere);
            $nomPere=$infoInd->nom;
            $prenomPere=$infoInd->prenom;
            $infoInd= ModelIndividu::getIndividu($idfam, $idMere);
            $nomMere=$infoInd->nom;
            $prenomMere=$infoInd->prenom;
            
            
            
            
            
          
            include "config.php";
            $vue = $root . "/app/view/individu/viewChosen.php";
            if(DEBUG){
                echo("ControllerIndividu : individuReadAll : vue : $vue");
            }
            require($vue);
        }
    }
?>