<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:03
 */

namespace BWB\Framework\mvc\models;


class Commentaire
{
    /* propriété*/
    private $idcommentaire;
    private $nom;
    private $avis;
    private $user_iduser;

    /* getter et setter*/
    public function getIdcommentaire(){

        return $this->idcommentaire;
    }

    public function setIdcommentaire($val){

        $this->idcommentaire = $val;
    }

    public function getNom(){

        return $this->nom;
    }

    public function setNom($val){

        $this->nom = $val;

    }

    public function getAvis(){

        return $this->avis;
    }

    public function setAvis($val){

        $this->avis = $val;
    }

    public function getUser_iduser(){

        return $this->user_iduser;
    }

    public function setUser_iduser($val){

        $this->user_iduser = $val;
    }
}