@extends("layouts.app")
@section("content")
    <div class="container">
        <form>
            <div class="form-group">
                <label for="tituloComidaCreate">Título de comida</label>
                <input type="text" class="form-control" id="tituloComidaCreate" name="tituloComidaCreate"
                       placeholder="Ponle un titulo llamativo a tu comida..." value="{{$comida['comida']->name}}">
            </div>
            <div class="form-group">
                <label for="descripcionComidaCreate">Descripción de tu comida</label>
                <textarea class="form-control" id="descripcionComidaCreate"
                          rows="3">{{$comida['comida']->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="precioRacionCreate">Precio por ración</label>
                <input type="number" class="form-control" id="precioRacionCreate" name="precioRacionCreate"
                       value="{{$comida['comida']->pre_racion}}">
            </div>
            <h2>Eventos: </h2>
            <div id="contenedorFechasPrinci">
                @foreach($comida['fechas'] as $indexKey  => $fecha)
                    <h3>Evento {{$indexKey+1}}</h3>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="numComensalesCreate">Número de comensales</label>
                            <input type="number" class="form-control" id="numComensalesCreate" name="numComensalesCreate" value="{{$fecha->num_comensales}}">
                        </div>
                        <div class="form-group  col-md-6 col-sm-12">
                            <label for="fecha">Fecha</label>
                            <input class="form-control" type="datetime-local" id="fecha" value="{{$fecha->fecha}}">
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="contentFechas">
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
    <script src="{{asset('js/editarComida.js')}}"></script>
@endsection