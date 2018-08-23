<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 23/08/18
 * Time: 20:07
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Experience_pro;

class DaoExp_pro extends DAO
{
    //fonction qui permet de rajouter une expérience Pro
    public function create($entity)
    {

        $sql = "INSERT INTO experience_pro (date_entrer,date_sortie,description,user_iduser, nom_boite) VALUES('".$entity->getDate_entrer()."','".$entity->getDate_sortie()."','".$entity->getDescription()."',".$entity->getUser_iduser().",'".$entity->getNom_boite()."')";
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