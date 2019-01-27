getUsers();
// var xhr = new XMLHttpRequest();
// alert(xhr.open('GET', 'thierry-halot.fr/api/user'));
//
//

 function getUsers() {
     $.ajax({
         type: "GET",
         url: "https://zestedesavoir.com/api/membres/",

        dataType: 'json',
         success: function (data) {

alert("oui");
             },

         error:function(data) {
             alert("non");
             }

     })
 }

// $(function() {
//     // Sections height
//     $(window).resize(function() {
//         var sH = $(window).height();
//         $('.contenue').css('height', sH + 'px');
//     });
// });