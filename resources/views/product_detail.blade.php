<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/Products_Detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>

    <!-- Navbar -->
    <section class="header">
        <div>
          <nav class="navbar navbar-expand-lg navbar-light container ">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
          
            @include('partial.navbar-item')
          </nav>   
    </section>  

    <!-- isi -->
    <section>
        <div class="container mt-5">
            <div class="row">
              @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif
                <div class="col d-flex">
                  
                  
                  <div class="col-2 btn ">
                    <button class="styleButton border-0 " onclick="plusDivs(-1)">❮</button>
  
                  </div>
                  <div class="col-8 ">
                    <div class="w3-content h-10" style="max-width:800px" >
                      @if($product->image)
                      <img class="mySlides border-1" src="{{ asset('storage/' . $product->image) }}" style="width:100%" alt="">
                      @else
                      <img class="mySlides border-1" src="{{ asset('assets/img/noImage.png') }}" style="width:100%">
                      @endif
                    
                    
                    <div class="text-center mt-5">
                    <button class=" buttonimg w3-red demo border-0" onclick="currentDiv(1)"></button> 
                    <button class=" buttonimg w3-red demo border-0" onclick="currentDiv(2)"></button> 
                    <button class=" buttonimg w3-red demo border-0" onclick="currentDiv(3)"></button> 
                  </div>
                  
                  </div>
                  </div>
                    <div class="col-2 btn">
                      <div class="w3-center">
                        <div class="w3-section">
                          <button class="styleButton border-0 " onclick="plusDivs(1)"> ❯</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col">
                  <div class="text">
                    <h4>{{ $product->nama}}</h4>
                    <p>{!! $product->deskripsi !!}</p>

                  </div>
                  <div class="d-flex"> 
                  <div class="col">
                    <div class="fw-bold">
                      <span>RP. </span>
                      <span id="root"></span>
                    </div>

                      <div class="d-flex mt-4 nominal">
                        <button class=" btnn" onclick="kurang()">-</button>
                        <h4 class="ms-2 fw-bold" id="nominal"></h4>
                        <button class="ms-2 btnn" onclick="tambah()">+</button>
                    </div>
                  </div>
                  <div class="col pt-5">
                    <form action="/product-details/{{ $product->slug }}/addToCart" method="POST">
                      @csrf
                    <input type="hidden" value="{{ $product->id }}" name="produkId" id="produkId">
                    <input type="hidden" name="produkHarga" id="produkHarga">
                    <input type="hidden" name="kuantitas" id="kuantitas">
                    <button type="submit" class="Addtocard text-white w-75 border-0 p-1">ADD TO CART</button>
                    </form>
                  </div>
                </div>
                </div>
              
                <div>
                  <h1 class=" text-center m-5 pt-5">RELATED PRODUCT</h1>

                  <div class="wrapper m-1">
                    <div class="slide-1">
                   <div class="carousel owl-carousel" >
                      <div class="img-card card  ">
                        <span class="fw-bold" >Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                      </div>
                      <div class="img-card card card-1">
                        <span class="fw-bold">Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                     </div>
                     <div class="img-card card card-1">
                      <span class="fw-bold">Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                   </div>
                      <div class="img-card card card-1">
                        <span class="fw-bold">Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                       </div>
                       <div class="img-card card card-1">
                        <span class="fw-bold">Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                       </div>
                       <div class="img-card card card-1">
                        <span class="fw-bold">Solar System</span>
                        <img src="assets/img/image 1.png" alt="">
                        <span>Rp. 1.500.000,00</span>
                       </div>
                </div>

            </div>
        </div>
    </div>
  </div>
</div>
</section>

<!-- footer -->
@include('partial.mini-footer')



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
              1000:{
                items:4,
                nav: false
              },
              
              
            }
          });
       </script>
 
    </section>

    <script>
     var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function currentDiv(n) {
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-red";
      }
    </script>
    <script>
      var data = {{ $product->harga }};
      var data_jual = {{ $product->harga }}
      var nominal = 1
      document.getElementById("root").innerText=data;
      document.getElementById("nominal").innerText=nominal;
      document.getElementById("produkHarga").value=data;
      document.getElementById("kuantitas").value=nominal;

      function kurang(){
        data = data -data_jual
        nominal = nominal -1
        document.getElementById("root").innerText=data;
        document.getElementById("kuantitas").value=nominal;
        document.getElementById("produkHarga").value=data;
        document.getElementById("nominal").innerText=nominal;

      }
      function tambah(){
        data = data + data_jual
        nominal = nominal +1
        document.getElementById("root").innerText=data;
        document.getElementById("kuantitas").value=nominal;
        document.getElementById("produkHarga").value=data;
        document.getElementById("nominal").innerText=nominal;

      }

    </script>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/countMe/countMe.min.js') }}"></script>

</body>