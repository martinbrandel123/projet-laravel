@extends('test_extand')
@section('content')
    @foreach ($prices as $price)
        <h4>{{$price->price}}</h4>
    @endforeach
@endsection