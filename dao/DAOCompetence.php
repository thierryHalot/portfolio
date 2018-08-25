<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 21/08/18
 * Time: 18:42
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Competence;

class DAOCompetence extends DAO
{
    //fonction qui permet de crer une conpétence
    public function create($entity)
    {

        $sql = "INSERT INTO competence (nom,logo,user_iduser,progression) VALUES('".$entity->getNom()."','".$entity->getLogo()."',".$entity->getUser_idser().",".$entity->getProgression().")";
        $this->getPdo()->query($sql);

    }

    //fonction qui permet de recupéré une compétence
    //prend en argument l'id de la compétence que je souhaite récuperé
    //retourne une entité peuplé des imformation souhaité
    public function retrieve($id)
    {
        $sql = "SELECT * FROM competence WHERE idcompetence =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Competence();
        $entity->setNom($result['nom']);
        $entity->setLogo($result['logo']);
        $entity->setUser_iduser((int)$result['user_iduser']);
        $entity->setProgression((int)$result['progression']);
        $entity->setIdcompetence((int)$result['idcompetence']);

        return $entity;

    }

    //fonction qui permet de mettre a jour une competence
    public function update($entity)
    {

        $sql = "UPDATE competence SET nom= '".$entity->getNom()."', user_iduser =".$entity->getUser_idser().", progression=".$entity->getProgression()." WHERE idcompetence = ". $entity->getIdcompetence();
        $this->getPdo()->query($sql);
    }

    //fonction qui permet de supprimer une competence
    public function delete($id)
    {
        $sql = "DELETE FROM competence WHERE idcompetence= " . $id;
        $this->getPdo()->query($sql);
    }

    //fonction qui récupure toute les competence de ma table
    //retourn un tableau peuplé des entité correspond aux compétences récupéré
    public function getAll()
    {
        $sql = "SELECT * FROM competence";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){

            $entity = new Competence();
            $entity->setNom($result['nom']);
            $entity->setLogo($result['logo']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setProgression((int)$result['progression']);
            $entity->setIdcompetence((int)$result['idcompetence']);

            array_push($entities,$entity);
        }
        return $entities;
    }

    //fonction qui permet de retrouver une competence
    //prend en argument un tableau associatif corespondant a l'element que je souhaite rechercher :
    // la clé coressespondant à la colonne que l'on souhaite recherche
    // en valeur : la valeur qui nous interresse
    //retourne un tableau peuplé des entité correspond a ma recherche
    public function getAllBy($filter)
    {
        $sql = "SELECT * FROM competence";
        $i = 0;

        //je boucle dans mon tableau
        foreach($filter as $key => $value){

//a la premiere iteration  je concataine ma variable $sql avec " WHERE " suivie de la clé /valeur de $filter"
            if($i===0){
                $sql .= " WHERE ";
//a toute les autres itération je rajoute des "AND" suivi des clée/valeur dans le cas d'une recherche plus poussé
            } else {
                $sql .= " AND ";
            }
            $sql .= $key . " = '" . $value . "'";

            $i++;
        };

        $entities = array();
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        foreach($results as $result){

            $entity = new Competence();
            $entity->setNom($result['nom']);
            $entity->setLogo($result['logo']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setProgression((int)$result['progression']);
            $entity->setIdcompetence((int)$result['idcompetence']);

            array_push($entities,$entity);
        };

        return $entities;
    }

}