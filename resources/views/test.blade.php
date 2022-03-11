
    @extends('test_extand')

    @section('css')
        <link rel="stylesheet" href="app.css">
    @endsection

    
    @section('content')

        @foreach ($products as $product )
            <div class="card">
                <a href="/test/{{$product->id}}">
                    <h4>{{$product->name}}</h4>
                    <img src="{{$product->image}}" alt="">
                    <p>{{$product->price}} €</p>
                </a>
            </div>
        @endforeach
    @endsection


