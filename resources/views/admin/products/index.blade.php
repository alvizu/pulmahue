@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div id="header" class="header" style="background: url('../../img/bg-fondo.jpg');">

        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section text-center">
                    <h2 class="title">Listado de Productos</h2>

                    <div class="team">
                        <div class="row">
                            <a href="{{ url('/admin/products/create')}}"class="btn btn-primary btn-round">Nuevo producto</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="col-md-4 text-center">Descripción</th>
                                        <th class="text-center">Categoría</th>
                                        <th class="text-right">Precio</th>
                                        <th class="text-right">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="text-center">{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td class="text-right">₡ {{ $product->price }}</td>
                                            <td class="td-actions text-right">

                                                <form class="" action="{{ url('/admin/products/'.$product->id)}}" method="post">
                                                  {{ csrf_field()}}
                                                  {{ method_field('DELETE') }}
                                                  <a href="{{ url('/products/'.$product->id) }}"type="button" rel="tooltip" title="Ver" class="btn btn-info btn-simple btn-xs" target="_blank">
                                                      <i class="fa fa-info"></i>
                                                  </a>
                                                  <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                      <i class="fa fa-edit"></i>
                                                  </a>
                                                  <a href="{{ url('/admin/products/'.$product->id.'/images') }}" type="button" rel="tooltip" title="Imagenes" class="btn btn-warning btn-simple btn-xs">
                                                      <i class="fa fa-image"></i>
                                                  </a>
                                                  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                      <i class="fa fa-times"></i>
                                                  </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $products->links() }}

                        </div>
                    </div>

                </div>



            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
