@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')

<div id="header" class="header header-filter" style="background: url('img/bg-epa-3-2200x1231.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form id="formRegister" class="form" method="POST" action="{{ route('register') }}" name="formRegister">

                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>Registro</h4>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input id="name" type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>

                                <input id="email" type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required>

                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone</i>
                                </span>

                                <input id="phone" type="phone" class="form-control" placeholder="Teléfono" name="phone" value="{{ old('phone') }}" required>
                            </div>

                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">place</i>
                                    </span>

                                    <input id="address" type="text" class="form-control" placeholder="Dirección" name="address" value="{{ old('address') }}" required>

                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>

                                <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>

                                <input id="password-c" type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required>
                            </div>


                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-simple">Confirmar Registro</button>
                        </div>
                        <br>
                        {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                         </a> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</div>


@endsection
