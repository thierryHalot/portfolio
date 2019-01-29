<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:02
 */

namespace BWB\Framework\mvc\models;



class Competence
{

    /* propriété*/

    private $idcompetence;
    private $nom;
    private $logo;
    private $user_iduser;
    private $progression;
    private $couleur;
    private $vitesse_aff;


    /* getter et setter*/
    public function getCouleur(){

        return $this->couleur;
    }

    public function setCouleur($val){

        $this->couleur = $val;

    }

    public function getVitesse_aff(){

        return $this->vitesse_aff;

    }

    public function setVitesse_aff($val){

        $this->vitesse_aff = $val;

    }

    public function getProgression(){

        return $this->progression;
    }

    public function setProgression($val){

        $this->progression = $val;
    }
    public function getIdcompetence(){

        return $this->idcompetence;
    }

    public function getTabAsso(){

        return $array = [

            "id" => $this->idcompetence,
            "nom" => $this->nom,
            "logo" => $this->logo,
            "progression" => $this->progression,
            "id_user" => $this->user_iduser,
            "couleur" => $this->couleur,
            "vitesse_aff" => $this->vitesse_aff

        ];


    }
    public function setIdcompetence($val){

        $this->idcompetence = $val;

    }

    public function getNom(){

        return $this->nom;
    }

    public function setNom($val){

        $this->nom = $val;
    }

    public function getLogo(){

        return $this->logo;
    }

    public function setLogo($val){

        $this->logo = $val;
    }

    public function getUser_idser(){

        return $this->user_iduser;

}

public function setUser_iduser($val){

        $this->user_iduser = $val;
}
}
