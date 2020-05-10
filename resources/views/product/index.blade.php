@extends('layouts.app')

@section('content')
    <h1>Product Index</h1>
    <div>
      @foreach($products as $product)
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <h4>{{ $product->price }}</h4>
      @endforeach
    </div>

    {{ $products->links() }}
@endsection
