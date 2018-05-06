@extends('layouts.app')

@section('content')
    <div class="container contCenter d-none d-md-flex">
        <div class="justify-content-center">
            <img src="{{ asset('imagenes/comidaPrinci.jpg') }}" class="img-fluid">
        </div>
        <div class="formBuscaPrinci">
            <div id="tituloFormBusc">Encuentra una comida. <h1>LIKE AT HOME</h1></div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" aria-label="ciudad" placeholder="Ciudad">
                <input class="form-control mr-sm-2" type="date" aria-label="Date">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>Buscar
                </button>
            </form>
        </div>
    </div>
    {{--
    <div class="container">
        <h2>Próximas Comidas: </h2>
        <div class="row">
            @foreach ($menus as $comida)
                <div class="col-md-4 unaComida">
                    <h3>{{$comida->name}}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eaque explicabo fuga inventore
                        ipsam laudantium maiores minima nam nesciunt offici </p>
                    <div class="pieComida">
                        <span>{{$comida->pre_racion}}€ por ración</span>
                        <span>{{$comida->num_comensales-$comida->num_ocupados}}/{{$comida->num_comensales}} raciones disponibles</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    --}}
@endsection