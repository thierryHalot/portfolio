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
function createVueComp(competence){

    $('#listeCompetences').append("<p class='"+competence.logo+"'>"+" "+competence.nom
        +"</p><div class='fondBarProgresse'><div style='color: white;text-align: center;background-color: "+competence.couleur+";' class='skills "+competence.nom
        +"' id='skill"+competence.nom+"'>"+competence.progression+"%</div></div>");

    //je stocke la hauteur de ma fenetre
    var height = $(window).height();
    if (height > 200) {
    framePerso(competence.progression,"skill"+competence.nom,competence.vitesse_aff);
    }
};


function getCompetences() {
      $.ajax({
          type: "GET",
          url: "http://portfolio.bwb/api/getCompetences",

         dataType: 'json',
          success: function (data) {
            let i = 0;

            while(i <= data.length){


                createVueComp(data[i]);

                i++
            }
            console.log(data);
              },

          error:function(data) {
              console.log(data);
              }

      })
  }


//si l'utilisateur descend en dessous des 100 px ,
// j'affiche l'animation de mes bars de progression


    // framePerso(90,"skillHtml",50);
    // framePerso(80,"skillCss",40);
    // framePerso(70,"skillJs",30);
    // framePerso(70,"skillPhp",20);
    // framePerso(65,"skillAjax",20);
    // framePerso(60,"skillSymfony",20);
    // framePerso(80,"skillSql",20);


    getCompetences();



