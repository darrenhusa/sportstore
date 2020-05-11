@extends('layouts.app')

@section('content')

  @foreach($products as $product)
    @include('product.product_summary', ['product' => $product])
  @endforeach

  <div class="">
    {{ $products->links() }}
  </div>
@endsection
