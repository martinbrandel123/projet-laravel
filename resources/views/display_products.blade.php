@extends('test_extand')

@section('content')
    @foreach ($products as $product)
        <h4>{{$product->name}}</h4>
        <p>{{$product->price}}</p>
        <br>
    @endforeach
@endsection