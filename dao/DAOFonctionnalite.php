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

    //fonction qui permet de récupérer une fonctionalite par raport a son id
    // et qui retourne une entité
    public function retrieve($id)
    {

        $sql = "SELECT * FROM fonctionalite WHERE idfonctionalite =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Fonctionnalite();
        $entity->setNom($result['nom']);
        $entity->setDescription($result['description']);
        $entity->setIdProjet((int)$result['projets_idprojets']);
        $entity->setId_fonctionnalite((int)$result['idfonctionalite']);
        return $entity;

    }

    //fonction qui permet de mettre à jour une fonctionalité
    public function update($entity)
    {

        $sql = "UPDATE fonctionalite SET description= '".$entity->getDescription()."', nom ='".$entity->getNom()."',projets_idprojets=".$entity->getIdprojet()." WHERE idfonctionalite = ". $entity->getId_fonctionnalite();
        $this->getPdo()->query($sql);

    }

    //fonction qui permet de supprimmer une fonctionalité
    public function delete($id)
    {
        $sql = "DELETE FROM fonctionalite WHERE idfonctionalite = " . $id;
        $this->getPdo()->query($sql);
    }

    //fonction qui permet de récupérer toutes les fonctionnalités et qui retourne un tableau peuplé des entitées récupérer
    public function getAll()
    {

        $sql = "SELECT * FROM fonctionalite";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){
            $entity = new Fonctionnalite();
            $entity->setNom($result['nom']);
            $entity->setDescription($result['description']);
            $entity->setIdProjet((int)$result['projets_idprojets']);
            $entity->setId_fonctionnalite((int)$result['idfonctionalite']);

            array_push($entities,$entity);
        }
        return $entities;

    }

    public function getAllBy($filter)
    {
        // TODO: Implement getAllBy() method.
    }

}