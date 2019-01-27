<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:51
 */

namespace BWB\Framework\mvc\controllers;


use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOUser;
use BWB\Framework\mvc\models\User;



class ControllerFront extends Controller
{
    public function getView(){

//recuperation des données me corespondant;
        $DaoUser = new DAOUser();
        $user = $DaoUser->retrieve(1);


        $projets = $DaoUser->getAllProjet($user->getIduser());

        $top = file_get_contents("views/template/top.php");
        $bottom = file_get_contents("views/template/bottom.php");
        //injection des données dans la vue
        $this->render("front", array(
            "top" => $top,
            "bottom"=> $bottom,
            "user"=> $user,
            "projets" => $projets,
        ));
    }

    public function get(){
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
//recuperation des données me corespondant;
        $DaoUser = new DAOUser();
        $user = $DaoUser->retrieve(1);

        $data = $user->convertJson();

        $test = $this->inputGet();

        $test['user'] = $data;

        echo $data;



//        $this->render("front", array(
//
//            "user"=> $data,
//        ));
         //echo $data;


    }
}