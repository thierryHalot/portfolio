<?php
// import de la classe Routing ( pour l'utiliser)
use BWB\Framework\mvc\Routing;
// pour beneficier de l'autoload de composer
include "vendor/autoload.php";

include "views/template/top.php";


// A chaque requete emise nous lançons le mecanisme de routage
(new Routing())->execute();


include "views/template/bottom.php";
