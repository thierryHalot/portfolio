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

    //fonction qui permet de mettre a jour une exp pro
    public function update($entity)
    {

        $sql = "UPDATE experience_pro SET date_entrer= '".$entity->getDate_entrer()."', date_sortie ='".$entity->getDate_sortie()."', description='".$entity->getDescription()."', user_iduser=".$entity->getUser_iduser().", nom_boite='".$entity->getNom_boite()."' WHERE idexperience_pro = ". $entity->getIdexperience_pro();
        $this->getPdo()->query($sql);
    }

    //fonction qui supprime une experience pro
    public function delete($id)
    {
        $sql = "DELETE FROM experience_pro WHERE idexperience_pro= " . $id;
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