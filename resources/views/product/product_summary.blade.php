<div class="card card-outline-primary m-1 p-1">
  <div class="bg-faded p-1">
    <h4>
      {{ $product->name }}
      <span class="badge badge-pill badge-primary" style="float:right">
        <small>${{ number_format($product->price, 2, '.', ',') }}</small>
      </span>
    </h4>
  </div>
  <div class="card-text p-1">{{ $product->description }}</div>
</div>
