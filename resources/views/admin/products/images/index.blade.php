@extends('layouts.app')

@section('title', 'Imagenes de Productos')

@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header header-filter" style="background: url('img/bg-epa-3-2200x1231.jpg');">

        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section text-center">
                    <h2 class="title">Imagenes del "{{$product->name}}"</h2>

                    <form class="post" action="" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="file" name="photo" required>
                      <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                      <a href="{{ url('/admin/products')}}"class="btn btn-default btn-round">Volver</a>

                    </form>

                    <hr>

                    <div class="row">
                    @foreach ($images as $image)
                      <div class="col-md-4">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <img src="{{ $image->url }}" width="250">
                            <form class="" action="" method="post">
                              {{ csrf_field() }}
                              {{method_field('DELETE')}}
                              <input type="hidden" name="image_id" value="{{$image->id}}">
                              <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                              @if ($image->featured)
                                <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada">
                                	<i class="material-icons">favorite</i>
                                </button>
                              @else
                                <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}"class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                	<i class="material-icons">favorite</i>
                                </a>
                              @endif


                            </form>

                          </div>
                        </div>
                      </div>

                    @endforeach
                  </div>

                </div>



            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
