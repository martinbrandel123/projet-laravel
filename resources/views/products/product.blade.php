@extends('main_template')

@section('cssSpe')
   
@endsection
@section('content')

{{-- @foreach ($orders as $order)
   <h1>{{$order->customer->last_name}}</h1>
@endforeach 


@foreach ($customers as $customer)
  @foreach ($customer->orders as $order)
      @dump($order->number)
  @endforeach
@endforeach --}}

<form action="/product/{{$product->id}}" method="POST">
    @csrf
    <div class="card" style="width: 18rem;">
        <div class="img_height">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
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