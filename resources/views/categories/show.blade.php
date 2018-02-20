@extends('layouts.app')

@section('title', 'Categoría')

@section('body-class', 'profile-page')


@section('styles')
<style media="screen">
  .team .row .col-md-3, .team .row .col-sm-6 {
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

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('/img/sopa.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{ $category->featured_image_url }}" alt="Imagen representativa de la categoría {{ $category->name }}" class="img-circle img-responsive img-raised">
                        </div>

                        <div class="name text-center">
                            <h3 class="title">{{ $category->name }}</h3>
                        </div>

                        @if (session('notification'))
                            <div class="alert alert-success">
                                {{ session('notification') }}
                            </div>
                        @endif

                    </div>
                </div>
                <div class="description text-center">
                    <p>{{ $category->description }}</p>
                </div>

                <div class="team text-center">
                    <div class="row">
                        @foreach($products as $product)

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="team-player">
                                    <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">
                                      <a href="{{ url('/products/'.$product->id) }}" target="_blank">{{ $product->name }}</a>
                                    </h4>
                                    <p class="description">{{ $product->description }} </p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="text-center">
                      {{ $products->links() }}
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Indique la cantidad</h4>
      </div>
      <form class="" action="{{ url('/cart') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="modal-body">
          <input type="number" name="quantity" value="1" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info btn-simple">Agregar</button>
        </div>
      </form>

    </div>
  </div>
</div>

@include('includes.footer')
@endsection
