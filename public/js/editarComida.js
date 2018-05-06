"use strict";
$("document").ready(function () {
    $("#anaFecha").click(function () {
        $("#contentFechas").append("<h3>Evento</h3><div class=\"row\"><div class=\"form-group col-md-6 col-sm-12\"><label for=\"numComensalesCreate\">Número de comensales</label> <input type=\"number\" class=\"form-control\" id=\"numComensalesCreate\" name=\"numComensalesCreate\" value=\"{{$fecha->num_comensales}}\"> </div> <div class=\"form-group  col-md-6 col-sm-12\"> <label for=\"fecha\">Fecha</label> <input class=\"form-control\" type=\"datetime-local\" id=\"fecha\" value=\"{{$fecha->fecha}}\"> </div> </div>");
    });
});
