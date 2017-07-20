@extends('layout.app')
@section('content')
    <div class="row container ">
        <div class="col s12 m8 l6 offset-l3 form">
            <div class="card-panel z-depth-4">
                <h3 class="brand-logo teal-text text-darken-3">Ingreso al Sistema</h3>

                <form action="/admin" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name="name" class="validate">
                            <label for="name">Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6">
                            <button type="submit" class="waves-effect waves-light btn teal darken-3"> Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection