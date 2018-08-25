<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:23
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Coordonne;
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
        $sql = "INSERT INTO user (nom, prenom, statut, photo, description, lien_cv, pseudo, mdp, code_postal,ville,adresse,tel,mail ) VALUES('" . $entity->getNom() . "','". $entity->getPrenom() . "','" . $entity->getStatut() . "','" . $entity->getPhoto() . "','" . $entity->getDescription() . "','" . $entity->getLien_cv() . "','". $entity->getPseudo() . "','". $entity->getMdp() . "',".$entity->getCode_postal().",'".$entity->getVille()."','".$entity->getAdresse()."',".$entity->getTel().", '".$entity->getMail()."')";

        $this->getPdo()->query($sql);

    }

    //fonction qui recupere un utilisateur par rapport a son id et renvoi un onject contenant toutes les imformations
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
        $entity->setCode_postal((int)$result['code_postal']);
        $entity->setVille($result['ville']);
        $entity->setAdresse($result['adresse']);
        $entity->setTel((int)$result['tel']);
        $entity->setMail($result['mail']);

       return $entity;
    }

//fonction qui recupère tous mes diplomes
    public function getDiplomes($id){

        $sql = "SELECT * FROM diplomes WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();

         return $results;
    }

    //fonction qui recupere tous mes projets
    public function getProjets($id){

        $sql = "SELECT * FROM projets WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();

        return $results;

    }

    //fonction qui recupere toute mes expériences professionels
    public function getExpPro($id){

        $sql = "SELECT * FROM experience_pro WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();

        return $results;

    }

    //fonction qui met a jour un utilisateur
    public function update($entity)
    {

        $sql = "UPDATE user SET nom= '".$entity->getNom()."', prenom='".$entity->getPrenom()."', statut='".$entity->getStatut()."', photo='".$entity->getPhoto()."',description='".$entity->getDescription()."', lien_cv='".$entity->getLien_cv()."',pseudo='".$entity->getPseudo()."', mdp='".$entity->getMdp()."', code_postal=".$entity->getCode_postal().", ville='".$entity->getVille()."', adresse='".$entity->getAdresse()."', tel=".$entity->getTel().", mail='".$entity->getMail()."' WHERE iduser = ". $entity->getIduser();
        $this->getPdo()->query($sql);
    }

    //fonction qui supprimme un utilisateur
    public function delete($id)
    {

        $sql = "DELETE FROM user WHERE iduser= " . $id;
        $this->getPdo()->query($sql);
    }

    //fonction qui permet de récupérer la liste de tous les uttilisateurs
    public function getAll()
    {
        $sql = "SELECT * FROM user";
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
        $entities = array();

        foreach($results as $result){

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
            $entity->setCode_postal((int)$result['code_postal']);
            $entity->setVille($result['ville']);
            $entity->setAdresse($result['adresse']);
            $entity->setTel((int)$result['tel']);
            $entity->setMail($result['mail']);

            array_push($entities,$entity);
        }
        return $entities;
    }

    public function getAllBy($filter)
    {
        // TODO: Implement getAllBy() method.
    }


}