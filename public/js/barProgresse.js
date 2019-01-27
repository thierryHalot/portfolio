//fonction permettant d'afficher ma bar de progression
//1er argument : taille de la progression (exemple 90% en html)
//2eme argument : l'id de ma div
//3eme argument : vitesse du chargement de la bar

function framePerso(progress, id, time) {

    var elem = document.getElementById(id);
    var width = 1;
    //toute les time milliseconde j'execute la cette fonction anonyme (function evenement)
    var interval = setInterval(() => {


        if (width >= progress) {
            //arrete le set interval
            clearInterval(interval);

        } else {
            width++;
            return elem.style.width = width + '%';
        }


    }, time);

}

//je stocke la hauteur de ma fenetre
var height = $(window).height();

//si l'utilisateur descend en dessous des 100 px ,
// j'affiche l'animation de mes bars de progression
if (height > 200) {

    framePerso(90,"skillHtml",50);
    framePerso(80,"skillCss",40);
    framePerso(70,"skillJs",30);
    framePerso(70,"skillPhp",20);
    framePerso(65,"skillAjax",20);
    framePerso(60,"skillSymfony",20);
    framePerso(80,"skillSql",20);
}

