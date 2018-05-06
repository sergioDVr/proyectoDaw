"use strict";
$("document").ready(function () {
    $("#anaFecha").click(function () {
        $("#contentFechas").append($("#contenedorFechasPrinci").clone());
    });
});
