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

    //fonction qui recupere un compte reseaux par rapport a son id
    public function retrieve($id)
    {
        $sql = "SELECT * FROM compte_reseaux WHERE idcompte_reseaux =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Compte_reseaux();
        $entity->setLien($result['lien']);
        $entity->setImg($result['img']);
        $entity->setUser_iduser((int)$result['user_iduser']);
        $entity->setNom($result['nom']);
        $entity->setIdcompte_reseaux((int)$result['idcompte_reseaux']);

        return $entity;
    }

    //fonction qui permet de mettre à jour un compte reseaux
    public function update($entity)
    {

        $sql = "UPDATE compte_reseaux SET lien= '".$entity->getLien()."', img ='".$entity->getImg()."', user_iduser=".$entity->getUser_iduser().",nom='".$entity->getNom()."' WHERE idcompte_reseaux = ". $entity->getIdcompte_reseaux();
        $this->getPdo()->query($sql);

    }

    public function delete($id)
    {
        $sql = "DELETE FROM compte_reseaux WHERE idcompte_reseaux= " . $id;
        $this->getPdo()->query($sql);
    }

    //fonction qui recupere tous les comptes reseaux
    public function getAll()
    {
        $sql = "SELECT * FROM compte_reseaux";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){

            $entity = new Compte_reseaux();
            $entity->setLien($result['lien']);
            $entity->setImg($result['img']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setNom($result['nom']);

            $entity->setIdcompte_reseaux((int)$result['idcompte_reseaux']);


            array_push($entities,$entity);
        }
        return $entities;
    }

    public function getAllBy($filter)
    {
        // TODO: Implement getAllBy() method.
    }

}