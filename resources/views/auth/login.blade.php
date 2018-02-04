@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')

<div id="header" class="header" style="background: url('img/bg-fondo.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup" style="margin-bottom: 300px;">
                    <form class="form" method="POST" action="{{ route('login') }}" name="formLogin">

                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Ingreso</h4>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>

                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->any())
                                    <div class="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>

                                <input type="password" placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code
-->
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar sesión
                                </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                            <a class="btn btn-simple text-center" href="{{ route('password.request') }}">
                                Restablecer contraseña
                             </a>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</div>
@endsection
