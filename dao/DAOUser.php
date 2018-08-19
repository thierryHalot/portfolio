<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:23
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\User;

class DAOUser extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }
//fonction qui cree un nouvelle utilisateur
    public function create($entity)
    {
        $sql = "INSERT INTO user (nom, prenom, statut, photo, description, lien_cv, pseudo, mdp, coordonne_idcoordonne ) VALUES('" . $entity->getNom() . ',' . $entity->getPrenom() . ',' . $entity->getStatut() . ',' . $entity->getPhoto() . ',' . $entity->getDescription() . ',' . $entity->getLien_cv() . ','. $entity->getPseudo() . ','. $entity->getMdp() . ','. $entity->getCoordonne() . "')";

        $this->getPdo()->query($sql);
    }

    //fonction qui recupere un utilisateur par rapport a son idée et renvoi un onject contenant toutes les imformations
    public function retrieve($id)
    {


        $sql = "SELECT * FROM user WHERE iduser=".$id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        $entity = new User();
        $entity->setIduser((int)$result['iduser']);
        $entity->setNom($result['nom']);
        $entity->setPrenom($result['prenom']);
        $entity->setStatut($result['statut']);
        $entity->setPhoto($result['photo']);
        $entity->setDescription($result['description']);
        $entity->setLien_cv($result['lien_cv']);
        $entity->setPseudo($result['pseudo']);
        $entity->setMdp($result['mdp']);
        $entity->setCoordonne((int)$result['coordonne_idcoordonne']);

       return $entity;
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