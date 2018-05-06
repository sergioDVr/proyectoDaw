@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p>Nombre:</p>
                                <p><strong>{{ Auth::user()->name }}</strong></p>
                                <hr>
                                <p>Email:</p>
                                <p><strong>{{ Auth::user()->email }}</strong></p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-responsive img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Comidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Proximos eventos</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
