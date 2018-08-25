<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 23/08/18
 * Time: 21:25
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Fonctionnalite;


class DAOFonctionnalite extends DAO
{

    //fonction qui cree une nouvelle fonctionalite
    public function create($entity)
    {

        $sql = "INSERT INTO fonctionalite (description,nom,projets_idprojets) VALUES('".$entity->getDescription()."','".$entity->getNom()."',".$entity->getIdProjet().")";
        $this->getPdo()->query($sql);


    }

    public function retrieve($id)
    {
        // TODO: Implement retrieve() method.
    }

    //fonction qui permet de mettre à jour une fonctionalité
    public function update($entity)
    {

        $sql = "UPDATE fonctionalite SET description= '".$entity->getDescription()."', nom ='".$entity->getNom()."',projets_idprojets=".$entity->getIdprojet()." WHERE idfonctionalite = ". $entity->getId_fonctionnalite();
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