getUsers();
// var xhr = new XMLHttpRequest();
// alert(xhr.open('GET', 'thierry-halot.fr/api/user'));
//
//

 function getUsers() {
     $.ajax({
         type: "GET",
         url: "http://thierry-halot.bwb/api/user",

        dataType: 'json',
         success: function (data) {
             console.log(data);
             },

         error:function(data) {
             alert("non");
             }

     })
 }

$(function() {
    // Sections height
    $(window).resize(function() {
        var sH = $(window).height();
        $('.contenue').css('height', sH + 'px');
    });
});