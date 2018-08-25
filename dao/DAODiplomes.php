<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 22/08/18
 * Time: 21:08
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Diplome;

class DAODiplomes extends DAO
{
    //fonction qui permet de rajouter un diplome
    public function create($entity)
    {

        $sql = "INSERT INTO diplomes (date_debut,date_fin,nom,description,nom_ecole,user_iduser) VALUES(".$entity->getDate_debut().",".$entity->getDate_fin().",'".$entity->getNom()."','".$entity->getDescription()."','".$entity->getNom_ecole()."',".$entity->getUser_iduser().")";
        $this->getPdo()->query($sql);

    }

    //fonction qui permet de recuperer un diplome par rapport a son id
    public function retrieve($id)
    {
        $sql = "SELECT * FROM diplomes WHERE iddiplomes =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Diplome();
        $entity->setDate_debut((int)$result['date_debut']);
        $entity->setDate_fin((int)$result['date_fin']);
        $entity->setNom($result['nom']);
        $entity->setDescription($result['description']);
        $entity->setNom_ecole($result['nom_ecole']);
        $entity->setUser_iduser((int)$result['user_iduser']);

        $entity->setIddiplome((int)$result['iddiplomes']);

        return $entity;
    }

    //fonction qui permet de mettre à jour un diplome
    public function update($entity)
    {
        $sql = "UPDATE diplomes SET date_debut= ".$entity->getDate_debut().", date_fin =".$entity->getDate_fin().", nom='".$entity->getNom()."', description='".$entity->getDescription()."' nom_ecole='".$entity->getNom_ecole()."' user_iduser=".$entity->getUser_iduser()." WHERE iddiplomes = ". $entity->getIddiplome();
        $this->getPdo()->query($sql);
    }

    //fonction qui permet de supprimmer un diplomes
    public function delete($id)
    {
        $sql = "DELETE FROM diplomes WHERE iddiplomes= " . $id;
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