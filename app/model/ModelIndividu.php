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
        /**
         * récupère tous les individus et toutes les données de la database individu
         */
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
    }

?>