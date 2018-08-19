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
    private $coordonne_idcoordonne;


    public function convertJson(){

        // Créer un tableau de données
        $tableau_pour_json = [

            'id'=> $this->iduser,
            'prenom'=> $this->prenom,
            'nom'=> $this->nom,
            'statut'=>$this->statut,
            'photo' =>$this->photo,
            'description'=>$this->description,
            'lien_cv'=>$this->lien_cv,
        ];

// Convertir le tableau au format json
        return json_encode($tableau_pour_json,JSON_FORCE_OBJECT);

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

    public function getCoordonne()
    {

        return $this->coordonne_idcoordonne;
    }

    public function setCoordonne($val){

        $this->coordonne_idcoordonne = $val;
    }
}