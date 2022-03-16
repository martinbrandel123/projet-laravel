@extends('backoffice.main_template')

@section('content')

    <div class="card" style="width: 18rem;margin: 0 auto;">
        <img src="{{$products->image}}" class="card-img-top" alt="">
        <div class="card-body">
            <form action="/backoffice/{{$id}}" method="POST">
                {{method_field('PUT')}}
                @csrf
                <div class="backoffice_edit ">
                    <label for="title">Modifier le titre de l'article</label>
                    <input type="text" id="title" style="border: solid black 1px; border-radius:5px;" name="name">
                </div>
                <div>
                    <label for="price">Modifier le prix de l'article</label>
                    <input type="text" id="price" style="border: solid black 1px; border-radius:5px;" name="price">
                </div>
                <button type="submit"class="btn btn-primary" >Modifier l'article</button>
            </form>

                <a href="/backoffice" class="btn btn-primary">backoffice</a>


        </div>
      </div><br>
@endsection