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

    //cette méthode permet d'affecter un msg qui servira pour la vue
    //a prévenir l'utilisateur que tous c'est bien passé
    public function createMsgConf($message){

     return $_SESSION['message'] = $message;

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

        $daoProjet = new DAOProjets();
        $projets = $daoUser->getAllProjet($this->user->getIduser());


        foreach ($projets as $projet){


            $projet->setFonctionnalite($daoProjet->getALLFonctionnalite($projet->getIdprojet()));

        }
        //var_dump($projet);
        $this->render("back", array(

            "top"=>$top,
            "bottom"=>$bottom,
            "user"=>$user,
            "diplomes"=>$diplomes,
            "expPros"=>$expPros,
            "compte_reseaux"=> $compte_reseaux,
            "competences"=>$competences,
            "projets"=>$projets
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
        $this->createMsgConf('Vos informations personnelles ont bien été mise à jour !!!');


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

        $this->createMsgConf('Le diplôme a été mis à jour avec succès !!!');
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

        $this->createMsgConf('Le diplôme a été créé avec succès !!!');
        header("Location: /admin");
    }

    //fonction qui permet de supprimer un diplome
    public function deleteDiplome(){

        $daodiplome = new DAODiplomes();
       $formDiplome = $this->inputPost();
       $daodiplome->delete($formDiplome['supprDiplome']);

       $this->createMsgConf('Le diplôme a bien été supprimé !!!');
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

    $this->createMsgConf('La nouvelle expérience professionnelle a bien été créée !!!');
    header("Location: /admin");
}

//fonction qui permet de supprimmer une expérience pro
public function deleteExpPro(){

    $daoExpPro = new DaoExp_pro();

    $formValue = $this->inputPost();


    $daoExpPro->delete($formValue['supprExpPro']);

    $this->createMsgConf("L'expérience professionnelle a bien été supprimée !!!");

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

    $this->createMsgConf("l'expérience professionnelle a bien été mise à jour !!!");

    header("Location: /admin");
}

//méthode qui permet de crée un nouveaux projet
public function createProjet(){

    $projet = new Projets();
    //je peuple mon entité avec les imformation du formulaire
    $formValue = $this->inputPost();

    $projet->setNom($formValue["nomProjetCreate"]);
    $projet->setDescription($formValue["descriptionProjetCreate"]);
    $projet->setTechno($formValue["technoProjetCreate"]);
    $projet->setType($formValue["typeProjetCreate"]);
    $projet->setLien_git($formValue["lienGitProjetCreate"]);
    $projet->setDate($formValue["dateProjetCreate"]);
    $projet->setUser_iduser($this->user->getIduser());

    $daoProjet = new DAOProjets();

    //si je récupère bien mon fichier dans ma superGlobale
    if(isset($_FILES['imgProjetCreate']))
    {
        //nom du dossier ou je déplace l'image
        $dossier = 'public/imgProjets/';


       //je récupère l'extension
        $extension = strrchr($_FILES['imgProjetCreate']['name'], '.');

        //je définie le nom du fichier
        $fichier = uniqid().$extension;
        //Si la fonction renvoie TRUE, c'est que ça a fonctionné,
        // l'image a été déplacer dans le dossier avec le nom du fichier spécifier
        if(move_uploaded_file($_FILES['imgProjetCreate']['tmp_name'], $dossier . $fichier))
        {
            //je persiste directement le chemin vers mon image, puis mon projet
            $projet->setImg('http://'.$_SERVER['SERVER_NAME'].'/'.$dossier.$fichier);
            $daoProjet->create($projet);


            $this->createMsgConf('Le projet a été créé avec succès !!!');
            //je redirigige l'utilisateur
            header("Location: /admin");


        }
        else //Sinon (la fonction renvoie FALSE), j'affiche un message d'erreur.
        {
            echo 'Echec de l\'upload !';
        }
    }
}

//méthode qui permet la suppression d'un projet
public function deleteProjet(){

        $daoProjet = new DAOProjets();

        //je récupère mon projet graçe a son id
        $formValue = $this->inputPost();
        $projet = $daoProjet->retrieve($formValue["supprProjet"]);

        $daoFonctionalite = new DAOFonctionnalite();

        //je tente de récupéré les fonctionnalitées qui lui sont associé
        $fonctionalites =$daoFonctionalite->getAllBy(['projets_idprojets' =>$projet->getIdprojet()]);

        //si mon projet possède des fonctionnalitées, je les supprime une a une
        if(!empty($fonctionalites)) {
            foreach ($fonctionalites as $fonctionalite) {

                $daoFonctionalite->delete($fonctionalite->getId_fonctionnalite());

            }
        }
        //je supprime le projet
        $daoProjet->delete($projet->getIdprojet());
        $this->createMsgConf('Le projet a été supprimé avec succès !!!');

        //je redirige l'utilisateur
        header("Location: /admin");


}


public function updateProjet(){

    $formValue = $this->inputPost();

    $daoProjet = new DAOProjets();

    $projet = $daoProjet->retrieve($formValue['idProjetUpdate']);

    $projet->setNom($formValue["nomProjetUpdate"]);
    $projet->setDescription($formValue["descriptionProjetUpdate"]);
    $projet->setTechno($formValue["technoProjetUpdate"]);
    $projet->setType($formValue["typeProjetUpdate"]);
    $projet->setLien_git($formValue["lien_gitProjetUpdate"]);
    $projet->setDate($formValue["dateProjetUpdate"]);
    $projet->setUser_iduser($this->user->getIduser());


    //si je récupère bien mon fichier dans ma superGlobale
    if(isset($_FILES['imgProjetUpdate']))
    {
        //nom du dossier ou je déplace l'image
        $dossier = 'public/imgProjets/';


        //je récupère l'extension
        $extension = strrchr($_FILES['imgProjetUpdate']['name'], '.');

        //je définie le nom du fichier
        $fichier = uniqid().$extension;
        //Si la fonction renvoie TRUE, c'est que ça a fonctionné,
        // l'image a été déplacer dans le dossier avec le nom du fichier spécifier
        if(move_uploaded_file($_FILES['imgProjetUpdate']['tmp_name'], $dossier . $fichier))
        {
            //je persiste directement le chemin vers mon image, puis mon projet
            $projet->setImg('http://'.$_SERVER['SERVER_NAME'].'/'.$dossier.$fichier);


            //je redirigige l'utilisateur



        }
        else //Sinon (la fonction renvoie FALSE), j'affiche un message d'erreur.
        {
            echo 'Echec de l\'upload !';
        }
    }
    //var_dump($projet);

    $this->createMsgConf('Le projet a été mis à jour avec succès !!!');
    $daoProjet->update($projet);
    header("Location: /admin");



}

//méthode qui permet de crée une nouvelle fonctionnalité correspondant a un projet

public function createFonct(){

    $formValue = $this->inputPost();
    $daoFonct = new DAOFonctionnalite();
    $fonct = new Fonctionnalite();

    $fonct->setNom($formValue["nomFonctCreate"]);
    $fonct->setDescription($formValue["descriptionFonctCreate"]);
    $fonct->setIdProjet($formValue["idProjetCreateFonct"]);

    $daoFonct->create($fonct);

    $this->createMsgConf('La fonctionnalité a bien été rajoutée !!!');
    header("Location: /admin");

}
//méthode qui permet de supprimmer une fonctionnalité d'un projet
public function deleteFonct(){

    $formValue = $this->inputPost();

    $daoFonct = new DAOFonctionnalite();

    $daoFonct->delete($formValue["supprFonct"]);

    $this->createMsgConf('La fonctionnalité a bien été supprimée !!!');

    header("Location: /admin");

}

//méthode qui permet de mettre a jour une fonctionnalité d'un projet
public function updateFonct(){

    $formValue = $this->inputPost();
    $daoFonct = new DAOFonctionnalite();
    $fonct = $daoFonct->retrieve($formValue["idFonctUpdate"]);
    $fonct->setNom($formValue["nomFonctUpdate"]);
    $fonct->setDescription($formValue["descriptionFonctUpdate"]);

    $daoFonct->update($fonct);

    $this->createMsgConf('La fonctionnalité a bien été mise à jour !!!');
    header("Location: /admin");




}

//fonction qui supprime un compte réseaux

public function deleteCompte_reseaux(){


        $daoCompte_reseaux = new DAOCompte_reseaux();

        $formValue = $this->inputPost();

        $daoCompte_reseaux->delete($formValue["supprCompte_reseaux"]);

        $this->createMsgConf('Le compte réseau a bien été supprimé !!!');

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

    $this->createMsgConf('Le compte réseau a bien été créé !!!');

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

    $this->createMsgConf('Le compte réseau a bien été mis à jour !!!');

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

    $this->createMsgConf('Le compétence a bien été rajoutée !!!');
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

    $this->createMsgConf('Le compétence a bien été mise à jour !!!');

    header("Location: /admin");
}

//fonction qui permet de supprimmer une compétence
public function deleteCompetence(){

    //Je recupere les imformations de mon formulaire
    $formValue = $this->inputPost();

    $daoCompetence = new DAOCompetence();

    $daoCompetence->delete($formValue["supprCompetence"]);

    $this->createMsgConf('Le compétence a bien été supprimée !!!');

    header("Location: /admin");
}
}