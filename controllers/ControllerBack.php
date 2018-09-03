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
        $expPros = $daoUser->getExpPro($user->getIduser());
        $compte_reseaux = $daoUser->getAllCompte_reseaux($user->getIduser());
        $competences = $daoUser->getAllCompetences($this->user->getIduser());

        $this->render("back", array(

            "top"=>$top,
            "bottom"=>$bottom,
            "user"=>$user,
            "diplomes"=>$diplomes,
            "expPros"=>$expPros,
            "compte_reseaux"=> $compte_reseaux,
            "competences"=>$competences
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

    //fonction qui permet de supprimer un diplome
    public function deleteDiplome(){

        $daodiplome = new DAODiplomes();
       $formDiplome = $this->inputPost();
       $daodiplome->delete($formDiplome['supprDiplome']);
        header("Location: /admin");
}

//fonction qui permet de crée une nouvelle experience pro
public function createExpPro(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoExpPro = new DaoExp_pro();

    $expPro = new Experience_pro();

    $expPro->setNom_boite($formValue["nom_boiteExpProCreate"]);
    $expPro->setDate_entrer($formValue["date_entrerExpProCreate"]);
    $expPro->setDate_sortie($formValue["date_sortieExpProCreate"]);
    $expPro->setDescription($formValue["descriptionExpProCreate"]);
    $expPro->setUser_iduser($this->user->getIduser());

    $daoExpPro->create($expPro);

    header("Location: /admin");
}

//fonction qui permet de supprimmer une expérience pro
public function deleteExpPro(){

    $daoExpPro = new DaoExp_pro();

    $formValue = $this->inputPost();


    $daoExpPro->delete($formValue['supprExpPro']);

    header("Location: /admin");
}

//fonction qui permet de mettre a jour une experience pro
public function updateExpPro(){


    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoExpPro = new DaoExp_pro();

    $expPro = $daoExpPro->retrieve($formValue["idExpProUpdate"]);


    $expPro->setNom_boite($formValue["nom_boiteExpPro"]);
    $expPro->setDate_entrer($formValue["date_entrerExpPro"]);
    $expPro->setDate_sortie($formValue["date_sortieExpPro"]);
    $expPro->setDescription($formValue["descriptionExpPro"]);

$daoExpPro->update($expPro);

    header("Location: /admin");
}


//fonction qui supprime un compte réseaux

public function deleteCompte_reseaux(){


        $daoCompte_reseaux = new DAOCompte_reseaux();

    $formValue = $this->inputPost();

    $daoCompte_reseaux->delete($formValue["supprCompte_reseaux"]);


    header("Location: /admin");


}

//fonction qui permet de crée un nouveau compte réseau
public function createCompte_reseaux(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompte_reseaux = new DAOCompte_reseaux();

    $compte_reseau = new Compte_reseaux();

    $compte_reseau->setNom($formValue["NomCompte_reseauCreate"]);
    $compte_reseau->setImg($formValue["ImgCompte_reseauCreate"]);
    $compte_reseau->setLien($formValue["LienCompte_reseauCreate"]);
    $compte_reseau->setUser_iduser($this->user->getIduser());

    $daoCompte_reseaux->create($compte_reseau);

    header("Location: /admin");
}

//fonction qui met a jour un compte reseau
public function updateCompte_reseaux(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompte_reseaux = new DAOCompte_reseaux();

    $compte_reseau = $daoCompte_reseaux->retrieve($formValue["idCompte_reseauxUpdate"]);
    $compte_reseau->setNom($formValue["nomCompte_reseauxUpdate"]);
    $compte_reseau->setImg($formValue["imgCompte_reseauxUpdate"]);
    $compte_reseau->setLien($formValue["lienCompte_reseauxUpdate"]);


    $daoCompte_reseaux->update($compte_reseau);

    header("Location: /admin");

}
//fonction qui permet de crée une nouvelle compétence
public function createCompetence(){


    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompetence = new DAOCompetence();

    $competence = new Competence();

    $competence->setNom($formValue["NomCompetenceCreate"]);
    $competence->setLogo($formValue["imgCompetenceCreate"]);
    $competence->setProgression($formValue["progressionCompetenceCreate"]);
    $competence->setUser_iduser($this->user->getIduser());

    $daoCompetence->create($competence);

    header("Location: /admin");



}

//fonction qui permet de mettre a jour une competence
public function updateCompetence(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompetence = new DAOCompetence();

    $competence = $daoCompetence->retrieve($formValue["idCompetenceUpdate"]);

    $competence->setNom($formValue["nomCompetenceUpdate"]);
    $competence->setLogo($formValue["imgCompetenceUpdate"]);
    $competence->setProgression($formValue["progressionCompetenceUpdate"]);

    $daoCompetence->update($competence);

    header("Location: /admin");
}

//fonction qui permet de supprimmer une compétence
public function deleteCompetence(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompetence = new DAOCompetence();

    $daoCompetence->delete($formValue["supprCompetence"]);

    header("Location: /admin");
}
}