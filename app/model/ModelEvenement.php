<?php

    require_once('Model.php');
    
    class ModelEvenement {
        private $famille_id, $id, $iid, $event_type, $event_date, $event_lieu;  
        
        private function __construct($famille_id=NULL, $id=NULL, $iid=NULL, $event_type=NULL, $event_date=NULL, $event_lieu=NULL)
        {
            $this->famille_id = $famille_id;
            $this->id = $id;
            $this->iid = $iid;
            $this->event_type = $event_type;
            $this->event_date = $event_date;
            $this->event_lieu = $event_lieu;
            
        }

        function getFamille_id(){
            return $this->famille_id;
        }

        function getId(){
            return $this->id;
        }

        function getIid(){
            return $this->iid;
        }

        function getEvent_type(){
            return $this->event_type;
        }

        function getEvent_date(){
            return $this->event_date;
        }

        function getEvent_lieu(){
            return $this->event_lieu;
        }

        function setFamily_id($id){
            $this->family_id = $id;
        }

        function setId($id){
            $this->id = $id;
        }

        function setIid($id){
            $this->iid = $id;
        }

        function setEvent_type($id){
            $this->event_type = $id;
        }

        function setEvent_date($id){
            $this->event_date = $id;
        }

        function setEvent_lieu($id){
            $this->event_lieu = $id;
        }

        /**
         * recupère la liste des évènements d'une famille
         */
        public static function getAllEvenement(){
            try{
                $database = Model::getInstance();
                $query = 
                "select famille_id, evenement.id, iid, event_type, event_date, event_lieu from evenement inner join famille on famille.id = evenement.famille_id where famille.nom = '{$_COOKIE['nom']}'";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            catch(PDOException $e){
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }
    }

?>
