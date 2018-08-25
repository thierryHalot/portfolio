<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:03
 */

namespace BWB\Framework\mvc\models;


class User
{
    /* propriété*/

    private $iduser;
    private $nom;
    private $prenom;
    private $statut;
    private $photo;
    private $description;
    private $lien_cv;
    private $pseudo;
    private $mdp;
    private $code_postal;
    private $ville;
    private $adresse;
    private $tel;
    private $mail;


    public function convertJson(){

        // Créer un tableau de données
        $tableau_pour_json = [

            "id"=>$this->iduser,
            "prenom"=>$this->prenom,
            "nom"=>$this->nom,
            "statut"=>$this->statut,
            "photo" =>$this->photo,
            "description"=>$this->description,
            "lien_cv"=>$this->lien_cv
        ];

// Convertir le tableau au format json
        return json_encode($tableau_pour_json);

    }
    /* getter et setter*/

    public function getIduser(){

        return $this->iduser;

    }

    public function setIduser($val){

        $this->iduser = $val;
    }

    public function getNom(){

        return $this->nom;
    }

    public function setNom($val){

        $this->nom = $val;
    }

    public function getPrenom(){

        return $this->prenom;
    }

    public function setPrenom($val){

        $this->prenom = $val;
    }


    public function getStatut(){

        return $this->statut;
    }

    public function setStatut($val){

        $this->statut = $val;
    }
    public function getPhoto(){

        return $this->photo;
    }

    public function setPhoto($val){

        $this->photo = $val;
    }

    public function getDescription(){

        return $this->description;
    }

    public function setDescription($val){

        $this->description = $val;
    }

    public function getLien_cv(){

        return $this->lien_cv;
    }

    public function setLien_cv($val){

        $this->lien_cv = $val;
    }

    public function getPseudo(){

        return $this->pseudo;
    }

    public function setPseudo($val){

        $this->pseudo = $val;
    }

    public function getMdp(){

        return $this->mdp;
    }

    public function setMdp($val){

        $this->mdp = $val;
    }

    public function getCode_postal(){

        return $this->code_postal;
    }

    public function setCode_postal($val){

        $this->code_postal = $val;
    }
    public function getVille(){

        return $this->ville;
    }

    public function setVille($val){

        $this->ville = $val;
    }

    public function getAdresse(){

        return $this->adresse;
    }

    public function setAdresse($val){

        $this->adresse = $val;
    }

    public function getMail(){

        return $this->mail;
    }

    public function setMail($val){

        $this->mail = $val;
    }

    public function getTel(){

        return $this->tel;
    }

    public function setTel($val){

        $this->tel = "0".$val;
    }
}