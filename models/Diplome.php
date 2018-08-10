<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:03
 */

namespace BWB\Framework\mvc\models;


class Diplome
{
    /* propriété*/

    private $iddiplome;
    private $date_debut;
    private $date_fin;
    private $nom;
    private $description;
    private $nom_ecole;
    private $user_iduser;

    /* getter et setter*/

    public function getIddiplome(){

        return $this->iddiplome;
    }

    public function setIddiplome($val){

        $this->iddiplome = $val;
    }

    public function getDate_debut(){

        return $this->date_debut;
    }

    public function setDate_debut($val){

        $this->date_debut = $val;
    }

    public function getDate_fin(){

        return $this->date_debut;
    }

    public function setDate_fin($val){

        $this->date_fin = $val;
    }

    public function getNom(){

        return $this->nom;

    }

    public function setNom($val){

        $this->nom = $val;
    }

    public function getDescription(){

        return $this->description;

    }

    public function setDescription($val){

        $this->description = $val;
    }

    public function getNom_ecole(){

        return $this->nom_ecole;
    }

    public function setNom_ecole($val){

        $this->nom_ecole = $val;
}

    public function getUser_iduser(){

        return $this->user_iduser;
    }

    public function setUser_iduser($val){

        $this->user_iduser = $val;
    }


}