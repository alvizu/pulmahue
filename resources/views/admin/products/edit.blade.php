@extends('layouts.app')


@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header header-filter" style="background: url('img/bg-fondo.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section">
                    <h2 class="title text-center">Editar producto</h2>

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    <form class="" action="{{ url('/admin/products/'.$product->id.'/edit') }}" method="post">
                      {{ csrf_field() }}

                      <div class="col-sm-4">
                        	<div class="form-group label-floating">
                        		<label class="control-label">Nombre del producto</label>
                        		<input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
                        	</div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripcion corta</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description', $product->description) }}">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripcion larga</label>
                            <input type="text" class="form-control" name="long_description">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Categoria</label>
                            <input type="number" class="form-control" name="category_id" value="{{ old('category_id', $product->category_id) }}">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $product->price) }}">
                          </div>
                      </div>
                      <div class="col-sm-4">
                      <button class="btn btn-primary">Guardar</button>
                      <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
                      </div>
                    </form>

                </div>


            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
