<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 23/08/18
 * Time: 20:08
 */

namespace BWB\Framework\mvc\models;


class Fonctionnalite
{

    private $Id_fonctionnalite;
    private $description;
    private $nom;
    private $projets_idprojets;


    public function getId_fonctionnalite(){

        return $this->Id_fonctionnalite;

    }

    public function setId_fonctionnalite($val){

         $this->Id_fonctionnalite = $val;

    }

    public function getDescription(){

        return $this->description;
    }

    public function setDescription($val){


        $this->description = $val;
    }

    public function getNom(){

        return $this->nom;
    }

    public function setNom($val){

        $this->nom = $val;
    }

    public function getIdProjet(){

        return $this->projets_idprojets;

    }

    public function setIdProjet($val){


        $this->projets_idprojets = $val;

    }

}


