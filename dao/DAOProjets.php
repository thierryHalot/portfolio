<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 21/08/18
 * Time: 09:12
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Projets;

class DAOProjets extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    //fonction qui permet de crée un projet
    public function create($entity)
    {


        $sql = "INSERT INTO projets (nom,description,img,techno,type,lien_git,user_iduser,date) VALUES('".$entity->getNom()."','".$entity->getDescription()."','".$entity->getImg()."','".$entity->getTechno()."','".$entity->getType()."','".$entity->getLien_git()."',".$entity->getUser_iduser().",'".$entity->getDate()."')";
        $this->getPdo()->query($sql);

    }

    public function retrieve($id)
    {
        // TODO: Implement retrieve() method.
    }

    //fonction qui permet de mettre un jour un projet
    public function update($array)
    {
        // TODO: Implement update() method.
    }

    //fonction qui permet de supprimer un projet
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