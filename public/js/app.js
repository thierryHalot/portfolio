getUsers();
var xhr = new XMLHttpRequest();
alert(xhr.open('GET', 'thierry-halot.fr/api/user'));


function getUsers() {
    $.ajax({
        type: "GET",
        url: "thierry-halot.fr/api/user/",
        data: data,

        success: function (data) {
            alert(data);
            alert("oui");
        },

        error:function(data) {
                console.log(data);
            alert("non");
            }

    })
}
