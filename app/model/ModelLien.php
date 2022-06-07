<?php

    require_once('Model.php');

    class ModelLien {
        private $famille_id, $id, $iid1, $iid2, $lien_type, $lien_date, $lien_lieu;

        private function __construct($famille_id=NULL, $id=NULL, $iid1=NULL, $iid2=NULL, $lien_type=NULL, $lien_date=NULL, $lien_lieu=NULL)
        {
            $this->famille_id = $famille_id;
            $this->id = $id;
            $this->iid1 = $iid1;
            $this->iid2 = $iid2;
            $this->lien_type = $lien_type;
            $this->lien_date = $lien_date;
            $this->lien_lieu = $lien_lieu;
        }

        public static function getAll($famille){
            try{
                $database = Model::getInstance();
                $query = 
                "select famille_id, lien.id, iid1, iid2, lien_type, lien_date, lien_lieu from lien inner join famille on famille.id = lien.famille_id where famille.nom = '$famille'";
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