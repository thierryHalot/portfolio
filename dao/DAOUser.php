<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:23
 */

namespace BWB\Framework\mvc\dao;


use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\Competence;
use BWB\Framework\mvc\models\Compte_reseaux;
use BWB\Framework\mvc\models\Coordonne;
use BWB\Framework\mvc\models\Diplome;
use BWB\Framework\mvc\models\Experience_pro;
use BWB\Framework\mvc\models\Projets;
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

    //fonction qui me permet de récupérer tous les projets d'un utilisateurs par rapport à son id
    public function getAllProjet($id){


        $sql = "SELECT * FROM projets WHERE user_iduser =".$id;

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
    //fonction qui recupere toute mes expériences professionels
    public function getExpPro($id){

        $sql = "SELECT * FROM experience_pro WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();


        $entities = array();

        foreach($results as $result){

            $entity = new Experience_pro();
            $entity->setDate_entrer($result['date_entrer']);
            $entity->setDate_sortie($result['date_sortie']);
            $entity->setDescription($result['description']);
            $entity->setNom_boite($result['nom_boite']);
            $entity->setUser_iduser((int)$result['user_iduser']);

            $entity->setIdexperience_pro((int)$result['idexperience_pro']);

            array_push($entities,$entity);
        };

        return $entities;

    }

    //fonction qui récupère tous les diplomes correspondants a un utilisateur
    public function getAllDiplomes($id){

        $sql = "SELECT * FROM diplomes WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();

        $entities = array();

        foreach($results as $result){

            $entity = new Diplome();
            $entity->setDate_debut((int)$result['date_debut']);
            $entity->setDate_fin((int)$result['date_fin']);
            $entity->setNom($result['nom']);
            $entity->setDescription($result['description']);
            $entity->setNom_ecole($result['nom_ecole']);
            $entity->setUser_iduser((int)$result['user_iduser']);

            $entity->setIddiplome((int)$result['iddiplomes']);

            array_push($entities,$entity);
        };

        return $entities;



    }

    //fonction qui permet de récupéré tous les compte réseau d'un uttilisateur
    public function getAllCompte_reseaux($id){


        $sql = "SELECT * FROM compte_reseaux WHERE user_iduser =".$id;

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
        };

        return $entities;

    }

    //fonction qui permet de récupérer toute les compétences d'un uttilisateur
    public function getAllCompetences($id){


        $sql = "SELECT * FROM competence WHERE user_iduser =".$id;

        $statement = $this->getPdo()->query($sql);

        $results = $statement->fetchAll();
        $entities = array();
        foreach($results as $result){

            $entity = new Competence();
            $entity->setNom($result['nom']);
            $entity->setLogo($result['logo']);
            $entity->setUser_iduser((int)$result['user_iduser']);
            $entity->setProgression((int)$result['progression']);
            $entity->setIdcompetence((int)$result['idcompetence']);
            $entity->setCouleur($result['couleur']);
            $entity->setVitesse_aff((int)$result['vitesse_aff']);

            array_push($entities,$entity);
        }
        return $entities;
    }

    //fonction qui met a jour un utilisateur
    public function update($entity)
    {

        $sql = "UPDATE user SET nom= '"
            .$entity->getNom()
            ."', prenom='".$entity->getPrenom()
            ."', statut='".$entity->getStatut()
            ."', photo='".$entity->getPhoto()
            ."',description='"
            .$entity->getDescription()
            ."', lien_cv='".$entity->getLien_cv()
            ."',pseudo='".$entity->getPseudo()
            ."', mdp='".$entity->getMdp()
            ."', code_postal="
            .$entity->getCode_postal()
            .", ville='".$entity->getVille()
            ."', adresse='"
            .$entity->getAdresse()
            ."', tel=".$entity->getTel()
            .", mail='"
            .$entity->getMail()
            ."' WHERE iduser = ". $entity->getIduser();

        //je me connecte à ma bdd et j'execute ma requète
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
    //fonction qui permet de retrouver un/des uttilisateur(s)
    //prend en argument un tableau associatif corespondant a l'element que je souhaite rechercher :
    // la clé coressespondant à la colonne que l'on souhaite recherche
    // en valeur : la valeur qui nous interresse
    //retourne un tableau peuplé des entité correspond a ma recherche
    public function getAllBy($filter)
    {
        $sql = "SELECT * FROM user";
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
            //je prend en compte l'insertion de simple quote avec addslashes
            $sql .= $key . " = '" . addslashes($value) . "'";

            $i++;
        };

        $entities = array();
        $statement = $this->getPdo()->query($sql);
        $results = $statement->fetchAll();
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
        };

        return $entities;
    }


}