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

    public function getView(){

        $top = file_get_contents("views/template/top.php");
        $bottom = file_get_contents("views/template/bottom.php");

        $DaoUser = new DAOUser();
        $user = $DaoUser->retrieve(1);

        $this->render("back", array(

            "top"=>$top,
            "bottom"=>$bottom,
            "user"=>$user
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
}