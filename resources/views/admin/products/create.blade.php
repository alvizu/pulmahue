@extends('layouts.app')


@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header header-filter" style="background: url('img/bg-epa-3-2200x1231.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section">
                    <h2 class="title text-center">Registrar nuevo producto</h2>

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    <form class="" action="{{ url('/admin/products') }}" method="post">
                      {{ csrf_field() }}

                      <div class="col-sm-6">
                        	<div class="form-group label-floating">
                        		<label class="control-label">Nombre del producto</label>
                        		<input type="text" class="form-control" name="name" value=" {{ old('name') }}">
                        	</div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripcion corta</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="form-group label-floating">
                            <label class="control-label">Descripcion larga</label>
                            <textarea class="form-control" rows="2" name="long_description">{{ old('long_description') }}</textarea>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Categoria</label>
                            <select type="number" class="form-control" name="category_id">
                                <!-- <option value="0">General</option> -->
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group label-floating">
                            <label class="control-label">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                          </div>
                      </div>
                      <div class="col-sm-4">
                      <button class="btn btn-primary">Registrar</button>
                      <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
                      </div>
                    </form>

                </div>


            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
