"use strict";
$("document").ready(function () {
    $("#fecha").change(function () {
        $.get("https://homestead.test/fecha/1", function(data, status){
            $("#numComen").text((data.num_comensales-data.num_ocupados));
            $("#numRac").empty();
            for(var i =1; i<=data.num_comensales-data.num_ocupados;i++){
                $("#numRac").append("<option>"+i+"</option>");
            }
        });
    });
});
