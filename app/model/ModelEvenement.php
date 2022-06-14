<?php

    require_once('Model.php');
    
    class ModelEvenement {
        private $famille_id, $id, $iid, $event_type, $event_date, $event_lieu;  
        
        private function __construct($famille_id=NULL, $id=NULL, $iid=NULL, $event_type=NULL, $event_date=NULL, $event_lieu=NULL)
        {
            if(!is_null($id)){
                $this->famille_id = $famille_id;
                $this->id = $id;
                $this->iid = $iid;
                $this->event_type = $event_type;
                $this->event_date = $event_date;
                $this->event_lieu = $event_lieu;
            }
        }

        public function getFamille_id(){
            return $this->famille_id;
        }

        public function getId(){
            return $this->id;
        }

        public function getIid(){
            return $this->iid;
        }

        public function getEvent_type(){
            return $this->event_type;
        }

        public function getEvent_date(){
            return $this->event_date;
        }

        public function getEvent_lieu(){
            return $this->event_lieu;
        }

        public function setFamille_id($id){
            $this->family_id = $id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setIid($id){
            $this->iid = $id;
        }

        public function setEvent_type($id){
            $this->event_type = $id;
        }

        public function setEvent_date($id){
            $this->event_date = $id;
        }

        public function setEvent_lieu($id){
            $this->event_lieu = $id;
        }

        /**
         * recupère la liste des évènements d'une famille
         */
        public static function getAllEvenement($famille){
            try{
                $database = Model::getInstance();
                echo("wshhhh ". $famille);
                $query = 
                "select famille_id, evenement.id, iid, event_type, event_date, event_lieu from evenement inner join famille on famille.id = evenement.famille_id where famille.nom = '$famille'";
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

        public static function insert($ids, $event_type, $event_date, $event_lieu){
            try{
                $database = Model::getInstance();
                $query = "select max(id) from evenement";
                $statement = $database->query($query);
                $tuple = $statement->fetch();
                $idmax = $tuple['0'];
                $idmax++;
                $id = explode("_",$ids);

                $query = "insert into evenement values (:famille_id , :id , :iid, :event_type, :event_date, :event_lieu)";
                $statement = $database->prepare($query);
                $statement->execute(
                    array(
                        'famille_id'=>(int)$id[0],
                        'id'=>$idmax,
                        'iid'=>(int)$id[1],
                        'event_type'=>$event_type,
                        'event_date'=>$event_date,
                        'event_lieu'=>$event_lieu
                    )
                );

                $query = "select * from evenement where id='$idmax'";
                $statement = $database->query($query);
                $results = $statement->fetch(PDO::FETCH_OBJ);
                return $results;
            }
            catch(PDOException $e){
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return NULL;
            }
        }

    }

?>
