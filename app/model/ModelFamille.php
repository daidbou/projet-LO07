<?php

    require_once('Model.php');

    class ModelFamille {
        private $id, $nom;

        public function __construct($id=NULL, $nom=NULL){
            if(!is_null($id)){
                $this->id=$id;
                $this->nom=$nom;
            }

        }

        function setId($id){
            $this->id = $id;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function getId() {
            return $this->id;
        }

        function getNom() {
            return $this->nom;
        }

        /**
         * retourne la liste de toutes les familles ainsi que leur id 
        */
        public static function getAll(){
            try{
                $database = Model::getInstance();
                $query = "select * from famille";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_CLASS,"ModelFamille");
                return $results;
            } 
            catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }

        }

    }

?>