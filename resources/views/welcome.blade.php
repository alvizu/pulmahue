@extends('layouts.app')

@section('title', config('app.name'))

@section('body-class', 'landing-page')

@section('styles')
  <style media="screen">
    .team .row .col-md-4, .team .row .col-sm-6 {
      margin-bottom: 5em;
    }
  .team .row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
  flex-wrap: wrap;
  }
  .team .row > [class*='col-'] {
  display: flex;
  flex-direction: column;
  }
  </style>
@endsection

@section('content')


      <!-- <section class="section section--video">
              <div class="container">
                  <div class="row middle-sm">
                      <div class="col-xs-12">
                          <h1 class="primary-header primary-header--home">CREÁ TU<br> FUTURO DIGITAL</h1>
                      </div>
                      <div class="col-xs-12 col-lg-8">
                          <p class="section__subtitle section__subtitle--home">Digital House, el coding school donde se forman las nuevas generaciones de coders y profesionales digitales para que imaginen, innoven y creen lo que siempre soñaron.</p>
                      </div>
                  </div>
              </div>
              <div class="section__video-container"><video class="section__video" muted="" autoplay="" loop="" preload="auto"> <source src="https://www.digitalhouse.com/wp-content/themes/dh/assets/videos/dh-home-header-video.mp4" type="video/mp4"></video></div>
          </section> -->
          <div class="wrapper">
                  <div class="header header-filter" style="background-image: url('img/bg-fondo.jpg');">
                    <div class="container">
                          <div class="row">
          					<div class="col-md-6">
          						<h1 class="title">Haz de tu alimentación tu mejor aliada</h1>


                                <h4>Te ofrecemos planes ajustados a tus objetivos, cocinando sano y balanceado para ti. Preocupate solo por ordenar tus pedidos que nosotros nos encargamos de llenar tu refri. No empiences una dieta que terminará algún día, <strong>comienza un estilo de vida que dure para siempre!</strong></h4>
          	                    <!-- <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
          							<i class="fa fa-play"></i> Watch video
          						</a> -->
          					</div>
                          </div>
                      </div>

                    </div>

        <!-- <div class="header video-container" style="background: url('img/bg-fondo.jpg');">
          <video autoplay loop class="fillWidth visible-lg">
            <source src="videos/dh-home-header-video.mp4" type="video/mp4; "/>
            Your browser does not support the video tag.

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1 class="title">{{ config('app.name') }}</h1>
                        <br/>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <p class="section__subtitle section__subtitle--home">Digital House, el coding school donde se forman las nuevas generaciones de coders y profesionales digitales para que imaginen, innoven y creen lo que siempre soñaron.</p>
                    </div>
                </div>
              </div>
            </video>
          </div> -->
                <!-- <div class="row">
                    <div class="col-md-12" >
                      <div class="jumbotron jumbotron-fluid" style="background: url('img/banner3.jpg'); height: 460px;">
                        <div class="container">
                          <h1 class="display-3">Pulmahue</h1>
                          <p class="lead">La cerveza de tradicion que sabe a nosotros, llevando siempre el sabor y la esencia que nos identifica.</p>
                        </div>
                      </div>
                    </div>
                </div> -->


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
                    <h2 class="title">Visita nuestras categorías</h2>
                    <form class="form-inline" action="{{ url('/search') }}" method="get">
                        <input class="form-control" type="text" placeholder="Buscar producto" name="query" value="">
                        <button class="btn btn-primary btn-just-icon" type="submit">
                        	 <i class="material-icons">search</i>
                        </button>
                    </form>


                    <div class="team">
                        <div class="row">
                            @foreach($categories as $category)

                                <div class="col-md-4 col-sm-6">
                                    <div class="team-player">
                                        <img src="{{ $category->featured_image_url }}" alt="Imagen representativa de la categoría {{ $category->name }}" class="img-raised img-circle">
                                        <h4 class="title">
                                          <a href="{{ url('/categories/'.$category->id) }}">{{ $category->name }}</a>
                                        </h4>
                                        <p class="description">{{ $category->description }} </p>
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
