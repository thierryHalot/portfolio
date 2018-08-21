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

    public function retrieve($id)
    {
        // TODO: Implement retrieve() method.
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

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getAllBy($filter)
    {
        // TODO: Implement getAllBy() method.
    }

}