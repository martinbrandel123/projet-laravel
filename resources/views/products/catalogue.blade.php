@extends('main_template')
@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection

@section('content')
<div class="wrapper">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <div class="img_height">
          @if ($product->image != null)
              <img src="/{{$product->image}}" class="card-img-top" alt="...">
          @endif

        </div>
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->price}} €</p>
          <a href="/product/{{$product->id}}" class="btn btn-primary">Voir l'article</a>
        </div>
      </div>
    @endforeach   
</div>

@endsection