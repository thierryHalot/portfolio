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
    private $adresse;
    private $mail;
    private $tel;
    private $statue;
    private $photo;
    private $description;
    private $lien_cv;

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

        return $this->tel;
    }

    public function getStatue(){

        return $this->statue;
    }

    public function setStatue($val){

        $this->statue = $val;
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
}