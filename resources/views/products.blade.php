<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/produts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>
    <section class="header">
        <div>
          <nav class="navbar navbar-expand-lg navbar-light container ">
            <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
          
            @include('partial.navbar-item')
          </nav>   
    </section>  

    <section>
        <div class="container" >
          <div class="text-center pt-5">
            <h1>FEATURED PRODUCT</h1>
          </div>
            <div class="row block-img ">
                @foreach ($products as $product)
                <div class="col-4  p pb-5">
                    @if ($product->image)
                    <a href="/product-details/{{ $product->slug }}">
                      <img class="img-col" style="height:15%;" src="{{ asset( $product->image) }}" alt="">
                    </a>
                    @else
                    <a href="/product-details/{{ $product->slug }}">
                      <img class="img-col" style="height:15%;" src="{{ asset('assets/img/NoImage.png') }}" alt="">
                    </a>
                    @endif
                    
                    
                </div>
                @endforeach
                
            </div>

            {{ $products->links() }}
            
            
        </div>
    </div>
   


    <section class="section-button">
      <div class="text-center"> 
        <h1 class="title pt-5  text-light">PT. Ruang Cipta Teknologi</h1>
        <ul class="d-flex list justify-content-center mt-4 ps-5 pe-5 ">
          <li class="mx-5 px-3s mt-5  li-list "> <a class="text-decoration-none  fw-bold link-light" href="">Product</a></li>
          <li class="mx-5 px-3 mt-5  li-list "> <a class="text-decoration-none link-light fw-bold" href="">Product</a></li>
          <li class="mx-5 px-3 mt-5  li-list "> <a class="text-decoration-none link-light fw-bold" href="">Product</a></li>
          <li class="mx-5 px-3 mt-5  li-list "> <a class="text-decoration-none link-light fw-bold" href="">Product</a></li>
 
          
        </ul>
      </div>
      <div>

        <div class="wrapper">
          <div class="slide-1">
            <div class="carousel owl-carousel" >
                <div class="img-card ">

                  <img src="assets/img/image 1.png" alt="">

                </div>
                <div class="img-card ">
                  <img src="assets/img/image 1.png" alt="">

                </div>
                <div class="img-card ">
                  <img src="assets/img/image 1.png" alt="">

                </div>
                <div class="img-card ">
                  <img src="assets/img/image 1.png" alt="">

                </div>
              </div>
          </div>
        </div>
        <div class="slidecontainer">
          <input type="range" min="1" max="4" value="2" class="slider  " id="myRange">
        </div>
      </div>
       @include('partial.mini-footer')
    </section>

</div>

    </section>
</section>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/countMe/countMe.min.js') }}"></script>
<script>
  
  $(".carousel").owlCarousel({
    responsive: {
      0:{
        items:1,
        nav: false
      },
      600:{
        items:2,
        nav: false
      },
      1000:{
        items:3,
        nav: false
      },
      
    }
  });
</script>

    
</body>
</html>