@extends('layouts.app')


@section('body-class', 'landing-page')

@section('styles')
  <style media="screen">
    .team .row .col-md-4 {
      margin-bottom: 5em;
    }
  </style>
@endsection

@section('content')


    <div class="wrapper">
        <div id="header" class="header" style="background: url('img/bg-fondo.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Más que una cerveza</h1>
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                      <div class="jumbotron jumbotron-fluid" style="background: url('img/banner3.jpg'); height: 460px;">
                        <div class="container">
                          <h1 class="display-3">Pulmahue</h1>
                          <p class="lead">La cerveza de tradicion que sabe a nosotros, llevando siempre el sabor y la esencia que nos identifica.</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <!-- <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Let's talk product</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        </div>
                    </div>

                </div> -->

                <div class="section text-center">
                    <h2 class="title">Productos Disponibles</h2>

                    <div class="team">
                        <div class="row">
                            @foreach($products as $product)

                                <div class="col-md-4 col-sm-6">
                                    <div class="team-player">
                                        <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title">
                                          <a href="{{ url('/products/'.$product->id) }}"></a>{{ $product->name }}
                                          <br>
                                            <small class="text-muted">Model</small>
                                        </h4>
                                        <p class="description">{{ $product->description }} </p>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

@endsection
