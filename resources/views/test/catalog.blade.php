@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="/public/css/style.css">
<div class="container">
    <h1>Каталог</h1>
    <div class="container">
    <div class="d-flex flex-wrap alignh-items-center justify-content-center">
        @foreach($comic as $comi)
            <h5>{{$comi->name}}</h5>
            <p>{{$comi->price}}</p>
            <img class="img-fluid age" src="{{$comi->img}}" class="d-block photo" alt="">
        @endforeach
    </div>
</div>
</div>

@endsection