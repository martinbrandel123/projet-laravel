@extends('main_template')

@section('content')

    <div class="card" style="width: 18rem;margin: 0 auto;">
        <img src="{{$products->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>{{$products->name}}</h5>
            <p>{{$products->id}}</p>
            <p>{{$products->price}}€</p>
          <a href="/backoffice" class="btn btn-primary">Retour backoffice</a>
        </div>
      </div><br>
@endsection