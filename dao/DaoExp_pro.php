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

//fonction qui permet de recuperer une experience pro par rapport a son id
    public function retrieve($id)
    {

        $sql = "SELECT * FROM experience_pro WHERE idexperience_pro =" . $id;
        $statement = $this->getPdo()->query($sql);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        $entity = new Experience_pro();
        $entity->setDate_entrer($result['date_entrer']);
        $entity->setDate_sortie($result['date_sortie']);
        $entity->setDescription($result['description']);
        $entity->setUser_iduser((int)$result['user_iduser']);
        $entity->setNom_boite($result['nom_boite']);
        $entity->setIdexperience_pro((int)$result['idexperience_pro']);

        return $entity;
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

    //fonction qui recupere toute les exp pro
    public function getAll()
    { $sql = "SELECT * FROM experience_pro";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){

            $entity = new Experience_pro();
            $entity->setDate_entrer($result['date_entrer']);
            $entity->setDate_sortie($result['date_sortie']);
            $entity->setDescription($result['description']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setNom_boite($result['nom_boite']);
            $entity->setIdexperience_pro((int)$result['idexperience_pro']);


            array_push($entities,$entity);
        }
        return $entities;
    }

    //fonction qui permet de retrouver une ou plusieurs expérience(s) pro par rapport a une colonne
    //prend en argument un tableau associatif corespondant a l'element que je souhaite rechercher :
    // la clé coressespondant à la colonne que l'on souhaite recherche
    // en valeur : la valeur qui nous interresse
    //retourne un tableau peuplé des entité correspond a ma recherche
    public function getAllBy($filter)
    {
        $sql = "SELECT * FROM experience_pro";
        $i = 0;

        //je boucle dans mon tableau
        foreach($filter as $key => $value){

//a la premiere iteration  je concataine ma variable $sql avec " WHERE " suivie de la clé /valeur de $filter"
            if($i===0){
                $sql .= " WHERE ";
//a toute les autres itération je rajoute des "AND" suivi des clée/valeur dans le cas d'une recherche plus poussé
            } else {
                $sql .= " AND ";
            }
            $sql .= $key . " = '" . addslashes($value) . "'";

            $i++;
        };

        $entities = array();
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        foreach($results as $result){

            $entity = new Experience_pro();
            $entity->setDate_entrer($result['date_entrer']);
            $entity->setDate_sortie($result['date_sortie']);
            $entity->setDescription($result['description']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setNom_boite($result['nom_boite']);
            $entity->setIdexperience_pro((int)$result['idexperience_pro']);



            array_push($entities,$entity);
        };

        return $entities;
    }

}