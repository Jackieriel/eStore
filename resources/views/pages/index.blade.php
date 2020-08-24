@extends('layouts.app')

@section('title')
    Products
@endsection


@section('content')

<div class="container">
    <h3 class="h3">All Products</h3>
    @if (isset($product) && count($product) > 0)

    <div class="row">
        @foreach($product as $products)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="{{ $products ? asset('images/'.$products->product_image) : 'link_to_default_image' }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$products->product_name}}</a></h3>
                    <div class="price">N{{$products->price}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      {{-- pagination --}}
      {{ $product->appends(Request::all())->links() }}
        @else
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nothing to show!</h4>
                <p class="card-description">All products out of stock</p>
                
            </div>
        </div>
        @endif
    </div>
</div>
<hr>

@endsection