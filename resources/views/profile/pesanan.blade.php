<!doctype html>
<html lang="en">
  <head>
    <!-- Vendor CSS style-->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Local Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Planet Intelligence</title>
  </head>
  <body>
    <section>
        <div style="background-color: #3782D7 !important;">
            <nav class="navbar navbar-expand-lg navbar-light container">
              <a class="navbar-brand" href="#"><img src="{{ asset("/assets/img/logo.png") }}" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            
             @include('partial.navbar-item')
            </nav>
    </section>
    <section style="background-color: #E5F3FE; font-family: Roboto;">
        <div class="container py-5">
            <div class="row">
                @include('profile.partial.sidebar')

                <div class="row col-9 ml-3 py-3 px-4">
                    <div class="col-12">
                        <div class="row" style="background-color: white; font-family: Roboto;">
                            <div class="col-4 py-3" style="">
                                <img src="{{ asset("/assets/img/solar-system.png") }}" alt="no image" style="width: 100%;">
                            </div>
                            <div class="col-4 py-3" >
                                <h5 style="font-weight: bold !important; font-family: Roboto;">Solar System</h5>
                                <h5 style="font-weight: bold !important; font-family: Roboto;">x2</h5>
                            </div>
                            <div class="col-4 py-3">
                                <p class="text-muted" style="font-family: Roboto; float: right; margin: auto;">11-03-2022
                                    <img src="{{ asset("/assets/img/question-circle.png") }}" alt="" style="width: 15%; padding-bottom: 3px;">
                                </p>
                                <h4 class="py-5" style="font-weight: bold !important; font-family: Roboto; float: right; margin: auto; padding-left: 50px;">Rp.3.000.000</h4>                        
                            </div>
                            <img src="{{ asset("/assets/img/Line 29.png") }}" alt="" style="width: auto; height: 1%; padding-top: 0;">
                            <div class="col-4 py-3" style="">
                                <p style="color: #0F1C8F; font-style: italic;">Pesanan Diterima</p>
                            </div>
                            <div class="col-5 py-3" style="">
                                <h5 style="font-weight: bold; float: right;">Total Pesanan :</h5>
                            </div>
                            <div class="col-3 py-3" style="">
                                <h4 style="font-weight: bold; float: right;">Rp 3.050.000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row" style="background-color: white; font-family: Roboto;">
                            <div class="col-4 py-3" style="">
                                <img src="{{ asset("/assets/img/solar-system.png") }}" alt="no image" style="width: 100%;">
                            </div>
                            <div class="col-4 py-3" >
                                <h5 style="font-weight: bold !important; font-family: Roboto;">Solar System</h5>
                                <h5 style="font-weight: bold !important; font-family: Roboto;">x1</h5>
                            </div>
                            <div class="col-4 py-3">
                                <p class="text-muted" style="font-family: Roboto; float: right; margin: auto;">21-04-2022
                                    <img src="{{ asset("/assets/img/question-circle.png") }}" alt="" style="width: 15%; padding-bottom: 3px;">
                                </p>
                                <h4 class="py-5" style="font-weight: bold !important; font-family: Roboto; float: right; margin: auto; padding-left: 50px;">Rp.1.500.000</h4>                        
                            </div>
                            <img src="{{ asset("/assets/img/Line 29.png") }}" alt="" style="width: auto; height: 1%; padding-top: 0;">
                            <div class="col-4 py-3" style="">
                                <p style="color: #0F1C8F; font-style: italic;">Pesanan sedang dalam perjalanan</p>
                            </div>
                            <div class="col-5 py-3" style="">
                                <h5 style="font-weight: bold; float: right;">Total Pesanan :</h5>
                            </div>
                            <div class="col-3 py-3" style="">
                                <h4 style="font-weight: bold; float: right;">Rp 1.550.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="./assets/js/script.js"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>