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

        /**
         * obtenir la liste de tous les liens d'une famille selectionnée
         */
        public static function getFamily($famille){
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

        public static function insert($i1, $femmeId,$union ,$date, $lieu){
            try{
                $database = Model::getInstance();

                $query = "select max(id) from lien";
                $statement = $database->query($query);
                $tuple = $statement->fetch();
                $idmax = $tuple['0'];
                $idmax++;

                $homme = explode("_", $i1);
                $query = "insert into lien value (:famille_id, :id, :iid1, :iid2, :lien_type, :lien_date, :lien_lieu)";
                $statement = $database->prepare($query);
                $statement->execute(
                    array(
                        'famille_id'=>$homme[0],
                        'id'=>$idmax,
                        'iid1'=>$homme[1],
                        'iid2'=>$femmeId,
                        'lien_type'=>$union,
                        'lien_date'=>$date,
                        'lien_lieu'=>$lieu
                    )
                    );
                $query = "select * from lien where id=$idmax";
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