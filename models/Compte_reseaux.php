<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:24
 */

namespace BWB\Framework\mvc\models;


class Compte_reseaux
{

    /* propriété*/

    private $idcompte_reseaux;
    private $lien;
    private $img;
    private $user_iduser;
    private $nom;

    /* getter et setter*/

    public function getIdcompte_reseaux(){

        return $this->idcompte_reseaux;
    }

    public function setIdcompte_reseaux($val){

        $this->idcompte_reseaux = $val;
    }

    public function getLien(){

        return $this->lien;

    }

    public function setLien($val){

        $this->lien = $val;
    }

    public function getImg(){

        return $this->img;
    }

    public function setImg($val){

        $this->img = $val;
    }

    public function getUser_iduser(){

        return $this->user_iduser;
    }

    public function setUser_iduser($val){

        $this->user_iduser = $val;

    }

    public function getNom(){

        return $this->nom;

    }

    public function setNom($val){

        $this->nom = $val;
    }
}