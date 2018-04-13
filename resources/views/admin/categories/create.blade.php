@extends('layouts.app')


@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header header-filter" style="background: url('img/bg-epa-3-2200x1231.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section">
                    <h2 class="title text-center">Registrar nueva categoría</h2>

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    <form class="" action="{{ url('/admin/categories') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="col-sm-8">
                        	<div class="form-group label-floating">
                        		<label class="control-label">Nombre de la categoría</label>
                        		<input type="text" class="form-control" name="name" value=" {{ old('name') }}">
                        	</div>
                      </div>

                      <div class="col-sm-4">
                        <label class="control-label ">Imagen de la categoría</label>
                        <input type="file" name="image">
                      </div>
                      <div class="col-sm-8">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripcion de la categoría</label>
                            <input type="text" class="form-control" name="description" value=" {{ old('description') }}">
                          </div>
                      </div>
                      <div class="col-sm-4 text-center">
                      <button class="btn btn-primary">Registrar</button>
                      <a href="{{ url('/admin/categories') }}" class="btn btn-default">Cancelar</a>
                      </div>
                    </form>

                </div>


            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
