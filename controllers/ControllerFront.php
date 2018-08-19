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




        //injection des données dans la vue
        $this->render("front", array(

            "user"=> $user,
        ));
    }

    public function get(){

//recuperation des données me corespondant;
        $DaoUser = new DAOUser();
        $user = $DaoUser->retrieve(1);

        $data = $user->convertJson();

        $test = $this->inputGet();

        $test['user'] = $data;


        $this->render("front", array(

            "user"=> $data,
        ));
         //echo $data;


    }
}