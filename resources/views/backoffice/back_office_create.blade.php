@extends('main_template')

@section('content')
<form action="/backoffice" method="post">

        @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="name" name="name">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="description"  name="description">
    </div>
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="price" name="price">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="image" name="image">
    </div>
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="quantity" name="quantity">
    </div>
    <div class="input-group mb-3">
        <input type="quantity" class="form-control" placeholder="weight" name="weight">
    </div>
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="available" name="available">
    </div>
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="discount" name="discount">
    </div>
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="category" name="category">
    </div>

    <button type="submit">Ajouter un article</button>
</form>

  
@endsection