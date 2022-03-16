@extends('backoffice.main_template')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
    </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td><a href="/backoffice/product/{{$product->id}}/show"><button>Voir</button></a></td>
        <td><a href="/backoffice/product/{{$product->id}}/edit"><button>Modifier</button></a></td>
        <td>
            <form action="/backoffice/product/{{$product->id}}/delete" method="POST">
            {{method_field('DELETE')}}
            @csrf
            <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="/backoffice/product/create"><button>Ajouter un produit</button></a>
    <br>
    <br>
@endsection