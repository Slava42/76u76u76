@extends("layouts.app")
@section("content")
<div class="container">
<link rel="stylesheet" href="/public/css/style.css">
<h1>Где нас найти?</h1>
</div>
<div class="flex-wrap d-flex justify-content-center align-items-center"><img src="/public/img/map.jpg" alt="map" class="map"></div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Третий слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


@endsection