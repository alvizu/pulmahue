@extends('layouts.app')

@section('body-class', 'signup-page')
 
@section('content')

<div class="header" style="background: url('img/bg-fondo.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}" name="formRegister">

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
                                <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                
                                <input id="email" type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required autofocus>

                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>

                                <input type="password" placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>
                            </div>  

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>

                                <input type="password" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required>
                            </div>  

                       
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar Registro</a>
                        </div>

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
