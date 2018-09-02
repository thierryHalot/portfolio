<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:52
 */

namespace BWB\Framework\mvc\controllers;


use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOCompetence;
use BWB\Framework\mvc\dao\DAOCompte_reseaux;
use BWB\Framework\mvc\dao\DAOCoordonne;
use BWB\Framework\mvc\dao\DAODiplomes;
use BWB\Framework\mvc\dao\DaoExp_pro;
use BWB\Framework\mvc\dao\DAOFonctionnalite;
use BWB\Framework\mvc\dao\DAOProjets;
use BWB\Framework\mvc\dao\DAOUser;
use BWB\Framework\mvc\models\Competence;
use BWB\Framework\mvc\models\Compte_reseaux;
use BWB\Framework\mvc\models\Coordonne;
use BWB\Framework\mvc\models\Diplome;
use BWB\Framework\mvc\models\Experience_pro;
use BWB\Framework\mvc\models\Fonctionnalite;
use BWB\Framework\mvc\models\Projets;
use BWB\Framework\mvc\models\User;

class ControllerBack extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $daoUser = new DAOUser();
        $user = $daoUser->retrieve(1);

        $this->user = $user;
    }





    public function getView(){

        $top = file_get_contents("views/template/top.php");
        $bottom = file_get_contents("views/template/bottom.php");

        $daoUser = new DAOUser();
        $user = $daoUser->retrieve(1);

        $diplomes = $daoUser->getAllDiplomes($user->getIduser());

        $this->render("back", array(

            "top"=>$top,
            "bottom"=>$bottom,
            "user"=>$user,
            "diplomes"=>$diplomes
        ));
    }

    public function updateUser(){



       $formValue = $this->inputPost();


       $daoUser = new DAOUser();


       $user = $daoUser->retrieve(1);
       $user->setNom($formValue["nomUser"]);
       $user->setLien_cv($formValue["lienCvUser"]);
       $user->setPrenom($formValue["prenomUser"]);
       $user->setStatut($formValue["statutUser"]);
       $user->setPhoto($formValue["photoUser"]);
       $user->setDescription($formValue["descriptionUser"]);
       $user->setCode_postal($formValue["codePostalUser"]);
       $user->setVille($formValue["villeUser"]);
       $user->setAdresse($formValue["adresseUser"]);
       $user->setTel($formValue["telUser"]);
       $user->setMail($formValue["emailUser"]);

       $daoUser->update($user);



        header("Location: /admin");
    }

    //fonction qui permet de metre a jour un diplome
    public function UpdateDiplomes(){


        //Je recupere les imformations de mon formulaire
        $formValue = $this->inputPost();

        //J'instencie un DAODiplomes
        $daoDiplome = new DAODiplomes();

        //Je recupere l'id du diplomes à mettre a jour
        $diplome = $daoDiplome->retrieve($formValue["idDiplomeUpdate"]);

$diplome->setNom($formValue["nomDiplomes"]);
$diplome->setDate_debut($formValue["date_debutDiplome"]);
$diplome->setDate_fin($formValue["date_finDiplomes"]);
$diplome->setNom_ecole($formValue["nom_EcoleDiplomes"]);
$diplome->setDescription($formValue["descriptionDiplomes"]);

//var_dump($diplome);
        $daoDiplome->update($diplome);
        header("Location: /admin");
    }

    //fonction qui permet de crée un diplome
    public function createDiplome(){


        //Je recupere les imformations de mon formulaire
        $formValue = $this->inputPost();

        //J'instencie un DAODiplomes
        $daoDiplome = new DAODiplomes();

        $diplome = new Diplome();

        $diplome->setUser_iduser($this->user->getIduser());
        $diplome->setNom($formValue["nomDiplomesCreate"]);
        $diplome->setDate_debut($formValue["date_debutDiplomeCreate"]);
        $diplome->setDate_fin($formValue["date_finDiplomesCreate"]);
        $diplome->setNom_ecole($formValue["nom_EcoleDiplomesCreate"]);
        $diplome->setDescription($formValue["descriptionDiplomesCreate"]);


        $daoDiplome->create($diplome);
        header("Location: /admin");
    }

    public function deleteDiplome(){

        $daodiplome = new DAODiplomes();
       $formDiplome = $this->inputPost();
       $daodiplome->delete($formDiplome['supprDiplome']);
        header("Location: /admin");
}
}