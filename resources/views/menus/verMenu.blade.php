@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="carousel slide col-md-8" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('imagenes/pru.jpg') }}" class="img-fluid" alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('imagenes/pru.jpg') }}" class="img-fluid" alt="Chicago">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('imagenes/comidaPrinci.jpg') }}" class="img-fluid" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
            <div class="col-md-4 usuarioComida text-center fondoComida">
                <img src="{{$usuComiFotos[0]->avatar }}" alt="{{ $usuComiFotos[0]->name }}"
                     class="img-responsive img-thumbnail imgUsuarioComida">
                <div><a class="nav-link" href="{{ $usuComiFotos[0]->name }}">{{ $usuComiFotos[0]->name }}</a></div>
                <div>{{ $usuComiFotos[0]->descripcion }}</div>
            </div>
        </div>
        <div class="row seperaComida ">
            <div class="col-md-8 text-center">
                <div class="fondoComida">
                    <div class="tituloComida">{{ $usuComiFotos[1]->name }}</div>
                    <div class="tituloComida">{{ $usuComiFotos[1]->descripcion }}</div>
                </div>
            </div>
            <div class="col-md-4 acomprar fondoComida">
                <div class="cabeceraReservaComida">
                    <div><span class="precioRacion" id="preRaSpan">{{ $usuComiFotos[1]->pre_racion }}€</span> por ración</div>
                    <div><span class="precioRacion" id="numComen">{{$usuComiFotos[2][1]->num_comensales-$usuComiFotos[2][1]->num_ocupados}}</span> disponibles
                    </div>
                </div>
                <div class="formularioReserva">
                    <form method="post" action="{{ route('reservar') }}">
                        <div class="form-group">
                            <label for="enumRac">Numero de Raciones</label>
                            <select class="form-control" id="numRac" name="numRac">
                                @for($i=1;$i<=$usuComiFotos[2][1]->num_comensales-$usuComiFotos[2][1]->num_ocupados;$i++)
                                    <option>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <select class="form-control" id="fecha" name="fecha">
                                @foreach($usuComiFotos[2] as $fecha)
                                    <option>{{$fecha->fecha}}</option>
                                @endforeach
                            </select>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger anchoBoton">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("scripts")
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/verComida.js')}}"></script>
@endsection