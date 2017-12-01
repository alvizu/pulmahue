@extends('layouts.app')


@section('body-class', 'signup-page')

@section('content')

<div class="header" style="background: url('img/bg-fondo.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        <p class="text-divider">Ingresa tus datos</p>
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

                                <input type="password" placeholder="Password" id="password" type="password" class="form-control" name="password" required>
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
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</a>
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
