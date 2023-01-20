@extends('layouts.template')

@section('content')
@foreach ($productos as $producto)

<div class="col-lg-4 menu-item" >
    <a href="{{ $producto->imagen }}" class="glightbox"><img src="{{ $producto->imagen }}" class="menu-img img-fluid" style="width: 350px; height:350px" alt="Imagen del Producto"></a>
    <h4>{{ $producto->Nombre }}</h4>
    <p class="descripcion">
        {{ $producto->descripcion }}
    </p>
    <p class="price">
        $ {{ $producto->precio }}
    </p>
    <a href="#contact"><button class="btn-book-a-table" style="border-radius: 50px; padding: 12px 16px;">Has tu Pedido</button></a>
    
</div><!-- Producto Item -->

@endforeach
@endsection

class="slick-track" style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 8400px;">