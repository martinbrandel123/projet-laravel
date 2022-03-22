@extends('main_template')

@section('cssSpe')
   
@endsection
@section('content')

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <div class="text-red-500">{{$error}}</div>
      @endforeach
    @endif

<form action="/product/{{$product->id}}" method="POST">
      @csrf
    <div class="card" style="width: 18rem;">
        <div class="img_height">
            @if ($product->image != null)
              <img src="/{{$product->image}}" class="card-img-top" alt="...">
            @endif
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->price}} €</p>
          <input type="number" name="quantity" style="border: solid 1px black;  border-radius: 5px;">
          <button type="submit">Ajouter au panier</button>
        </div>
      </div>
</form>

<p>
    @isset($record)

    @endisset
</p>


@endsection