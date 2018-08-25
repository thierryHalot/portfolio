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

    //fonction qui permet de recupéré un projet
    //prend en argument l'id du projet que je souhaite récuperé
    //retourne une entité peuplé des imformation souhaité
    public function retrieve($id)
    {
        $sql = "SELECT * FROM projets WHERE idprojets =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Projets();
        $entity->setNom($result['nom']);
        $entity->setDescription($result['description']);
        $entity->setImg($result['img']);
        $entity->setTechno($result['techno']);
        $entity->setType($result['type']);
        $entity->setLien_git($result['lien_git']);
        $entity->setDate($result['date']);
        $entity->setUser_iduser((int)$result['user_iduser']);

        $entity->setIdprojet((int)$result['idprojets']);

        return $entity;
    }

    //fonction qui permet de mettre un jour un projet
    public function update($entity)
    {

       $sql = "UPDATE projets SET nom= '".$entity->getNom()."', description='".$entity->getDescription()."', img='".$entity->getImg()."', techno='".$entity->getTechno()."',type='".$entity->getType()."', lien_git='".$entity->getLien_git()."',user_iduser=".$entity->getUser_iduser().", date='".$entity->getDate()."' WHERE idprojets = ". $entity->getIdprojet();
        $this->getPdo()->query($sql);

    }



    //fonction qui permet de supprimer un projet
    public function delete($id)
    {
        $sql = "DELETE FROM projets WHERE idprojets= " . $id;
        $this->getPdo()->query($sql);

    }

    //fonction qui récupère tout les projets de ma table
    //retourne un tableau peuplé des entité correspondant aux projets récupéré
    public function getAll()
    {
        $sql = "SELECT * FROM projets";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){

            $entity = new Projets();
            $entity->setNom($result['nom']);
            $entity->setDescription($result['description']);
            $entity->setImg($result['img']);
            $entity->setTechno($result['techno']);
            $entity->setType($result['type']);
            $entity->setLien_git($result['lien_git']);
            $entity->setDate($result['date']);
            $entity->setUser_iduser((int)$result['user_iduser']);

            $entity->setIdprojet((int)$result['idprojets']);


            array_push($entities,$entity);
        }
        return $entities;
    }

    public function getAllBy($filter)
    {
        // TODO: Implement getAllBy() method.
    }

}