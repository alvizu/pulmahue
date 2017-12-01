@extends('layouts.app')

@section('title', 'Dashboard')

@section('body-class', 'product-page')

@section('content')


    <div class="wrapper">
        <div class="header header-filter" style="background: url('img/bg-fondo.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section">
                    <h2 class="title text-center">Dashboard</h2>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav nav-pills nav-pills-primary" role="tablist">
                    	<li>
                    		<a href="#dashboard" role="tab" data-toggle="tab">
                    			<i class="material-icons">dashboard</i>
                    			Carrito de compras
                    		</a>
                    	</li>
                    	<li>
                    		<a href="#tasks" role="tab" data-toggle="tab">
                    			<i class="material-icons">list</i>
                    			Pedidos realizados
                    		</a>
                    	</li>
                    </ul>

                </div>


            </div>

        </div>
        
        @include('includes.footer')
    </div>
    
    
@endsection
