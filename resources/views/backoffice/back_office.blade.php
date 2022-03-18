@extends('main_template')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
    </tr>
    </thead>
    <tbody>

      @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->category->name}}</td>
        <td><a href="/backoffice/product/{{$product->id}}/show"><button>Voir</button></a></td>
        <td><a href="/backoffice/product/{{$product->id}}/edit"><button>Modifier</button></a></td>
        <td>
            <form action="/backoffice/product/{{$product->id}}/delete" method="POST">
                @method('DELETE')
            @csrf
            <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

    {{-- <form action="/backoffice/category/{{$category->id}}"></form> --}}
    <a href="/backoffice/product/create"><button>Ajouter un produit</button></a>
    <br>
    <br>
@endsection