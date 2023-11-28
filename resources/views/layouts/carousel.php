<link rel="stylesheet" href="{{asset('css/bootstap.min.css')}}">
<link href="{{asset('css/carousel.css')}}" rel="stylesheet">



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/Producto1.jpg') }}" class="d-block w-75" alt="Producto1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Producto2.jpg') }}" class="d-block w-75" alt="Producto2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Producto3.jpg') }}" class="d-block w-75" alt="Producto3">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Producto4.jpg') }}" class="d-block w-75" alt="Producto4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src= "{{asset('js/popper.min.js')}}"></script>
<script src= "{{asset('js/bootstrap.min.js')}}">const carousel = new bootstrap.Carousel('#myCarousel')</script>

