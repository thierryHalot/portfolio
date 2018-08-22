<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 22/08/18
 * Time: 20:33
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Compte_reseaux;

class DAOCompte_reseaux extends DAO
{
    //fonction qui rajoute un compte reseaux
    public function create($entity)
    {
        $sql = "INSERT INTO compte_reseaux (lien,img,user_iduser,nom) VALUES('".$entity->getLien()."','".$entity->getImg()."',".$entity->getUser_iduser().",'".$entity->getNom()."')";
        $this->getPdo()->query($sql);

    }

    public function retrieve($id)
    {
        // TODO: Implement retrieve() method.
    }

    //fonction qui permet de mettre à jour un compte reseaux
    public function update($entity)
    {

        $sql = "UPDATE compte_reseaux SET lien= '".$entity->getLien()."', img ='".$entity->getImg()."', user_iduser=".$entity->getUser_iduser().",nom='".$entity->getNom()."' WHERE idcompte_reseaux = ". $entity->getIdcompte_reseaux();
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