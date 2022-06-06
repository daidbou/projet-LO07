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
                $query = "select * from famille order by id";
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

        public static function insert($nom){
            try{
                $database = Model::getInstance();
                
                $query = "select max(id) from famille";
                $statement = $database->query($query);
                $tuple = $statement->fetch();
                $id = $tuple['0'];
                $id++;

                $query = "insert into famille value (:id, :nom)";
                $statement = $database->prepare($query);
                $statement->execute([
                    "id" => $id,
                    "nom" => $nom,
                ]);
                return $nom;
            }
            catch(PDOException $e){
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return -1;
            } 
        }

        public static function getOne(){
            try{
                $database = Model::getInstance();
                $query = "select * from famille where nom = '{$_GET['nom']}'";
                $statement = $database->query($query);
                $results = $statement->fetch(PDO::FETCH_OBJ);
                
                return $results;
            }
            catch(PDOException $e){
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return -1;
            }
        }
    }

?>