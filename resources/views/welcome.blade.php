@extends('layouts.app')


@section('body-class', 'landing-page')

@section('content')


    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{ asset('img/bg-fondo.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Más que una cerveza</h1>
                        <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                        <br />
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Watch video
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Let's talk product</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        </div>
                    </div>

                </div>

                <div class="section text-center">
                    <h2 class="title">Productos Disponibles</h2>

                    <div class="team">
                        <div class="row">
                            @foreach($products as $product)

                                <div class="col-md-4">
                                    <div class="team-player">
                                        <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title">{{ $product->name }} <br />
                                            <small class="text-muted">Model</small>
                                        </h4>
                                        <p class="description">{{ $product->description }} </p>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('includes.footer')
    </div>


@endsection
