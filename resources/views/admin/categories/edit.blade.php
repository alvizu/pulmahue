@extends('layouts.app')


@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header header-filter" style="background: url('img/bg-fondo.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section">
                    <h2 class="title text-center">Editar categoría</h2>

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    <form class="" action="{{ url('/admin/categories/'.$category->id.'/edit') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="col-sm-8">
                        	<div class="form-group label-floating">
                        		<label class="control-label">Nombre de la categoría</label>
                        		<input type="text" class="form-control" name="name" value="{{ old('name', $category->name) }}">
                        	</div>
                      </div>
                      <div class="col-sm-4">
                        <label class="control-label ">Imagen de la categoría</label>
                        <input type="file" name="image">
                        @if ($category->image)
                        <p class="help-block">
                          Subir sólo si desea cambiar la <a href="{{ asset('/images/categories/'.$category->image) }}" target="_blank">imagen actual</a>
                        </p>
                        @endif
                      </div>
                      <div class="col-sm-8">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripción</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description', $category->description) }}">
                          </div>
                      </div>
                      <div class="col-sm-4">
                      <button class="btn btn-primary">Guardar</button>
                      <a href="{{ url('/admin/categories') }}" class="btn btn-default">Cancelar</a>
                      </div>
                    </form>

                </div>


            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
