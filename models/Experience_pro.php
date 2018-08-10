<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:26
 */

namespace BWB\Framework\mvc\models;


class Experience_pro
{
    /* propriété*/

    private $idexperience_pro;
    private $date_entrer;
    private $date_sortie;
    private $description;
    private $user_iduser;
    private $nom_boite;

    /* getter et setter*/

    public function  getIdexperience_pro(){

        return $this->idexperience_pro;

    }
    public function setIdexperience_pro($val){

        $this->idexperience_pro = $val;
    }

    public function getDate_entrer(){

        return $this->date_entrer;

    }

    public function setDate_entrer($val){

        $this->date_entrer = $val;
    }

    public function getDate_sortie(){

        return $this->date_sortie;
    }

    public function setDate_sortie($val){

        $this->date_sortie = $val;
    }

    public function getDescription(){

        return $this->description;
    }

    public function setDescription($val){

        $this->description = $val;

    }

    public function getUser_iduser(){

        return $this->user_iduser;
    }

    public function setUser_iduser($val){

        $this->user_iduser = $val;
    }

    public function getNom_boite(){

        return $this->nom_boite;
    }

    public function setNom_boite($val){

        $this->nom_boite = $val;
    }
}