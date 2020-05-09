@extends('layouts.app')

@section('content')
    <h1>Product Index</h1>

    <ul>
      @foreach($products as $product)
        <li>{{ $product->name }}</li>
        @endforeach
    </ul>
    
@endsection
