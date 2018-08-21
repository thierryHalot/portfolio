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

    public function update($array)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
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