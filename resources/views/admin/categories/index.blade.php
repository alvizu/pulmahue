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
                    <h2 class="title">Listado de Categorías</h2>

                    <div class="team">
                        <div class="row">
                            <a href="{{ url('/admin/categories/create')}}"class="btn btn-primary btn-round">Nueva categoría</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="col-md-4 text-center">Descripcion</th>
                                        <th class="text-right">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="text-center">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td class="td-actions text-right">

                                                <form class="" action="{{ url('/admin/categories/'.$category->id)}}" method="post">
                                                  {{ csrf_field()}}
                                                  {{ method_field('DELETE') }}
                                                  <a type="button" rel="tooltip" title="Ver" class="btn btn-info btn-simple btn-xs">
                                                      <i class="fa fa-info"></i>
                                                  </a>
                                                  <a href="{{ url('/admin/categories/'.$category->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                      <i class="fa fa-edit"></i>
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

                            {{ $categories->links() }}

                        </div>
                    </div>

                </div>



            </div>

        </div>

@include('includes.footer')
    </div>


@endsection
