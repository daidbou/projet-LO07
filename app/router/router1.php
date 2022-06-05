
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerFamille.php');
require ('../controller/ControllerEvenement.php');
require ('../controller/ControllerLien.php');
require ('../controller/ControllerIndividu.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param["action"];

unset($param['action']);

$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "familleReadAll" :
    case "familleReadOne" :
    case "familleReadId" :
    case "familleCreate" :
    case "familleCreated" :
    case "sansDoublon" :
    case "nbrfamille" :
        ControllerFamille::$action();
        break;

    case "vinReadAll" :
    case "vinReadOne" :
    case "vinReadId" :
    case "vinCreate" :
    case "vinCreated" :

        ControllerVin::$action();
        break;
    // Tache par défaut



    case "mesPropositions" :

        ControllerCave::$action();
        break;
    default:
        $action = "caveAccueil";
        ControllerCave::$action();
        break;
}


?>
<!-- ----- Fin Router1 -->

