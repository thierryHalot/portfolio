<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 10/08/2018
 * Time: 17:04
 */

namespace BWB\Framework\mvc\models;


use BWB\Framework\mvc\dao\DAOProjets;

class Projets
{
    /* propriété*/

    private $idprojets;
    private $nom;
    private $description;
    private $img;
    private $techno;
    private $type;
    private $lien_git;
    private $date;
    private $user_iduser;

    private $fonctionalites;

    /* getter et setter*/

    public function getFonctionalites(){

        return $this->fonctionalites;

    }

    public function setFonctionnalite($val){

        $this->fonctionalites= $val;

    }


    public function getDate(){

        return $this->date;
    }
    public function setDate($val){


        $this->date = $val;
    }
    public function getIdprojet(){

        return $this->idprojets;
    }

    public function setIdprojet($val){

        $this->idprojets = $val;
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

    public function getImg(){

        return $this->img;
    }

    public function setImg($val){

        $this->img = $val;
    }

    public function getTechno(){

        return $this->techno;
    }

    public function setTechno($val){

        $this->techno = $val;
    }

    public function getType(){

        return $this->type;
    }

    public function setType($val){

        $this->type = $val;
    }

    public function getLien_git(){

        return $this->lien_git;
    }

    public function setLien_git($val){

        $this->lien_git = $val;

    }

    public function getUser_iduser(){

        return $this->user_iduser;
    }

    public function setUser_iduser($val){

        $this->user_iduser = $val;
    }
}