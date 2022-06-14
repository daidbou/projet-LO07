<?php

    require_once('Model.php');

    class ModelIndividu {

        private $famille_id, $id, $nom, $prenom, $sexe, $pere, $mere;

        private function __construct($famille_id=NULL, $id=NULL, $nom=NULL, $prenom=NULL, $sexe=NULL, $pere=NULL, $mere=NULL)
        {
            if(!is_null($id)){
                $this->famille_id = $famille_id;
                $this->id = $id;
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->sexe = $sexe;
                $this->pere = $pere;
                $this->mere = $mere;
            }
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getFamille_id(){
            return $this->famille_id;
        }

        public function getId(){
            return $this->id;
        }

        public function getSexe(){
            return $this->sexe;
        }

        public function getPere(){
            return $this->pere;
        }

        public function getMere(){
            return $this->mere;
        }


        /**
         * récupère tous les individus et toutes les données de la database individu
         */
        public static function getAllFamily($famille){
            try{
                $database = Model::getInstance();

                $query = "select id from famille where nom = '$famille'";
                $statement = $database->query($query);
                $row = $statement->fetch();
                $id = $row[0];
                $query = "select * from individu where id<>0 and famille_id = $id order by id";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } 
            catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }

        public static function getAll(){
            try{
                $database = Model::getInstance();
                $query = "select * from individu where id<>0 order by famille_id";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_CLASS,"ModelIndividu");
                return $results;
            } 
            catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }

        public static function getSexeAll($param){
            try{
                $database = Model::getInstance();
                $query = "select * from individu where id<>0 and sexe = '$param' order by famille_id";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_CLASS,"ModelIndividu");
                return $results;
            } 
            catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }

        public static function insert($enfant, $parent){
            try{
                $database = Model::getInstance();
                $enfantArray = explode("_", $enfant);
                $parentArray = explode("_",$parent); 
                if($parentArray[1]=='H')
                    $query = "update individu set pere = {$parentArray[0]} where famille_id = {$enfantArray[0]} and id = {$enfantArray[1]}";
                else
                    $query = "update individu set mere = {$parentArray[0]} where famille_id = {$enfantArray[0]} and id = {$enfantArray[1]}";
            
                $database->query($query);

                $query = "select * from individu where famille_id = {$enfantArray[0]} and id = {$enfantArray[1]}";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetch(PDO::FETCH_OBJ);

                return $results;
            }
            catch(PDOException $e){
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }
        
        public static function insertIndividuFamille($idfamille, $prenom,){
            $database = Model::getInstance();
            $query = "insert into individu value (:id, :nom)";
                $statement = $database->prepare($query);
                $statement->execute([
                    "id" => $id,
                    "nom" => $nom,
                    $famille_id, $id, $nom, $prenom, $sexe, $pere, $mere
                ]);
        }
        
    }

?>