@extends('main_template')

@section('cssSpe')
   
@endsection
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="text-red">{{$error}}</div>
@endforeach
@endif

<div>
    
    Article bien ajouté au panier 
</div>

@endsection