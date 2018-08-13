<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 16:01
 */

namespace BWB\Framework\mvc\models;


class Coordonne
{

    private $idcoordonne;
    private $code_postal;
    private $ville;
    private $adresse;
    private $tel;
    private $mail;

    public function getIdcoordonne(){

        return $this->idcoordonne;
    }

    public function setIdCoordonne($val){

        $this->idcoordonne = $val;
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

        return $this->tel;
    }
}