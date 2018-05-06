@extends("layouts.app")
@section("content")
    <div class="container">
        <form>
            <div class="form-group">
                <label for="tituloComidaCreate">Título de comida</label>
                <input type="text" class="form-control" id="tituloComidaCreate" name="tituloComidaCreate"
                       placeholder="Ponle un titulo llamativo a tu comida...">
            </div>
            <div class="form-group">
                <label for="descripcionComidaCreate">Descripción de tu comida</label>
                <textarea class="form-control" id="descripcionComidaCreate" rows="3"></textarea>
            </div>
            <div id="contenedorFechasPrinci">
                <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="precioRacionCreate">Precio por ración</label>
                        <input type="number" class="form-control" id="precioRacionCreate" name="precioRacionCreate">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="numComensalesCreate">Número de comensales</label>
                        <input type="number" class="form-control" id="numComensalesCreate" name="numComensalesCreate">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-6 col-sm-12">
                        <label for="fecha" class="form-group">Fecha</label>
                        <div>
                            <input class="form-control" type="date" id="fecha">
                        </div>
                    </div>
                </div>
            </div>
            <div  id="contentFechas">

            </div>
            <div class="form-group  col-md-6 col-sm-12">
                <label for="fecha" class="form-group"></label>
                <div>
                    <i class="fas fa-plus" id="anaFecha"> Añadir otra fecha para esta comida</i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </div>
@endsection
@section("scripts")
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/crearComida.js')}}"></script>
@endsection