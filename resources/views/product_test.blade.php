@extends('test_extand')

@section('css')
    <link rel="stylesheet" href="app.css">
@endsection

@section('content')
    <div class="cards">
          <div  class="card">
            <h1>{{$products[0]->name}}</h1>
            <img src="{{$products[0]->image}}" alt="" style="width:100px;">
            <p>{{$products[0]->price}} €</p>
          </div>
    </div>
@endsection 
