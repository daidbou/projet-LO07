
<!-- ----- debut Router1 -->
<?php

require ('../controller/ControllerFamille.php');
require ('../controller/ControllerEvenement.php');
require ('../controller/ControllerLien.php');
require ('../controller/ControllerIndividu.php');
require ('../controller/ControllerGenealogie.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
    
    case "familleReadAll" :
    case "familleCreate" :
    case "familleCreated" :
    case "familleSelect" :
    case "familleSelected" :
        ControllerFamille::$action();
        break;

    case "evenementReadAll" :
    case "evenementCreate" :
    case "evenementCreated" :

        ControllerEvenement::$action();
        break;
    // Tache par défaut
    
    case "lienReadAll" :
    case "lienCreate" :
    case "lienCreated" :
    case "lienUnionCreate" :
    case "lienUnionCreated" :

        ControllerLien::$action();
        break;

    case "individuReadAll" :
    case "individuAjout" :
        ControllerIndividu::$action();
        break;
        
    default:
        $action = "accueil";
        ControllerGenealogie::$action();
        break;
}


?>
<!-- ----- Fin Router1 -->

