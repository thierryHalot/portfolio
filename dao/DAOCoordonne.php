<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 22/08/18
 * Time: 17:17
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Coordonne;

class DAOCoordonne extends DAO
{

    //methode qui permet de crée une nouvelle coordonne
    public function create($entity)
    {

        $sql = "INSERT INTO coordonne (code_postal,ville,adresse,tel,mail) VALUES(".$entity->getCode_postal().",'".$entity->getVille()."','".$entity->getAdresse()."',".$entity->getTel().", '".$entity->getMail()."')";
        $this->getPdo()->query($sql);
    }

    public function retrieve($id)
    {
        // TODO: Implement retrieve() method.
    }
//fonction qui permet de mettre a jour une coordonne
    public function update($entity)
    {
        
        $sql = "UPDATE coordonne SET code_postal=".$entity->getCode_postal().", ville='".$entity->getVille()."', adresse='".$entity->getAdresse()."', tel=".$entity->getTel().", mail='".$entity->getMail()."' WHERE idcoordonne = ". $entity->getIdcoordonne();
        $this->getPdo()->query($sql);

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