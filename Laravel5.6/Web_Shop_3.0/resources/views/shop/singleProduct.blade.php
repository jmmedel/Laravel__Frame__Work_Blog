
@extends('layouts.master')

@section('title') Shop SingleProduct  @endsection
@section('content')
    

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('img/assets/GU.png') }}' ")>
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>{{ $product->title }}</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container  ">
   
        <div class="row">
        
            <div class="col-md-6">
                <img src="{{ asset($product->thumbnail) }}" width="100" alt=""
            </div>
            <div class="col-md-6">
                <h2>{{ $product->title }}</h2>
                <hr>
                {{ $product->description }}
                <hr>
                <b>${{ $product->price }}</b>
                <br>
                <a href="{{ route('shop.orderProduct',$product->id) }}" class="btn btn-primary">Checkout with Paypal</a>
            </div>
   
    </div>
    
    
</div>


@endsection
