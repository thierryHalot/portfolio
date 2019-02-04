//getUsers();
// var xhr = new XMLHttpRequest();
// alert(xhr.open('GET', 'thierry-halot.fr/api/user'));
//
//

//  function getUsers() {
//      $.ajax({
//          type: "GET",
//          url: "https://zestedesavoir.com/api/membres/",
//
//         dataType: 'json',
//          success: function (data) {
//
// alert("oui");
//              },
//
//          error:function(data) {
//              alert("non");
//              }
//
//      })
//  }


function tourne(event){

    $(event).addClass('tourne')


}
$(document).ready(function(){



    $('.slideEffect').effect("slide", "slow");

    $("#gestionUser").click(function(){
        $("#affGestionUser").slideDown('slow');
        $("#affFormUpdateUser").slideDown('slow');
    });
    $("#gestionProjets").click(function(){
        $("#affGestionProjets").slideDown('slow');
    });
    $("#gestionFonct").click(function(){
        $("#affGestionFonct").slideDown('slow');
    });
    $("#gestionDiplomes").click(function(){
        $("#affGestionDiplomes").slideDown('slow');
    });
    $("#gestionExpPro").click(function(){
        $("#affGestionExpPro").slideDown('slow');
    });
    $("#gestionReseauSoc").click(function(){
        $("#affGestionReseauSoc").slideDown('slow');
    });
    $("#gestionComp").click(function(){
        $("#affGestionComp").slideDown('slow');
    });

});


// $(function() {
//     // Sections height
//     $(window).resize(function() {
//         var sH = $(window).height();
//         $('.contenue').css('height', sH + 'px');
//     });
// });