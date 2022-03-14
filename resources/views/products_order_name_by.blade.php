@extends('test_extand')
@section('content')
    @foreach ($names as $name)
        <h4>{{$name->name}}</h4>
    @endforeach
@endsection