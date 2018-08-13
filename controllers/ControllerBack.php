<?php
/**
 * Created by PhpStorm.
 * User: Fatcobra
 * Date: 13/08/2018
 * Time: 11:52
 */

namespace BWB\Framework\mvc\controllers;


use BWB\Framework\mvc\Controller;

class ControllerBack extends Controller
{

    public function getView(){


        $this->render("back");
    }
}