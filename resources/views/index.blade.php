<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor CSS style-->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Local Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" >
    
    <!-- Local js -->
    

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Planet Intelligence</title>
  </head>
  <body>
      <section class="header">
          <div>
            <nav class="navbar navbar-expand-lg navbar-light container ">
              <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            
              @include('partial.navbar-item')
            </nav>

            <div class="content-header col-md-7 container justify-content-start">
              <h1 class="mt-5 pt-5">
                WE ARE HERE TO BE SOLUTION FOR YOUR BUSSINESS</h1>
              <h3 class="col-md-12 mb-5">
                Ruang Cipta Teknologi Is Here To Collaborate As Your Bussiness Solution</h3>
              <button class="pill-button mt-2 mb-5">Learn More</button>
            </div>
          </div>
        </div>        
      </section>

      <section class="content-2 container border-bottom border-dark pb-5" style="margin-top: 100px;" data-aos="fade-up" data-aos-duration="1500">
        <div class="justify-content-center row">
          <div class="col-md-3 col-sm-3 col-lg-5">
            <img src="./assets/img/content-img-2.png" style="width: 100%; height: auto;" alt="About">
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6">
            <h6>ABOUT US</h6>
            <h1>We design, create, and build digital projects.</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit<br></br>
              
              in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident,
            </p>
            <button class="pill-button mt-2 mb-5">Read More</button>
          </div>
        </div>
      </section>

      <section >
        <div class="countertitle container mt-5">
          <h1>Getting the job done properly</h1>
      </div>
        <section class="counters" style="background-color: white">
          <div class="container d-flex justify-content-center kartucount-isi" >
              

                
                <div class="card p-2" style="width: 18rem;" data-aos="flip-up" data-aos-duration="1500"> 
                  <div class="card-body">
                    <h5 class="card-title"><div class="counter1" style="font-size: 45px;">1000</div></h5>
                    <p style="color: black">projects from 21k customers done so far</p>
                  </div>
                </div>   
              
                <div class="card p-2" style="width: 18rem;" data-aos="flip-up" data-aos-duration="1500">
                  <div class="card-body">
                    <h5 class="card-title" ><div class="counter2 " style="font-size: 45px;">321</div></h5>
                    <p style="color: black">projects from 21k customers done so far</p>
                  </div>
                </div>  

                <div class="card p-2" style="width: 18rem;" data-aos="flip-up" data-aos-duration="1500">
                  <div class="card-body">
                    <h5 class="card-title"><div class="counter3 " style="font-size: 45px;">20</div></h5>
                    <p style="color: black">projects from 21k customers done so far</p>
                  </div>
                </div>  
          </div>
        </section>

        <div class="container border-top counterbegin">
          
        </div>

       
        <div data-aos="zoom-in-up" data-aos-duration="1500">
          <section class="container mt-5" >
            <div class="row" >
              <div class="our-news col-md-3 form-outline">
                <h5 style="color: #2370C8;">OUR NEWS</h5>
                <h1 style="color: #262A4E;">Latest News</h1>
                <img src="./assets/img/underline.png" alt="underline">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor
                   incididunt labo</p>
                  <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Enter Your Email" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-primary">
                      <img src="./assets/img/Arrow 2.png" alt="">
                    </button>
                  </div>
              </div>
              <div class="card col-md-3 mx-3" style="width: 25rem; background-color: #3782D7; color: #F9F9F9;">
                <div class="card-body">
                  <h5 class="card-title">Maecenas laoree efficiture sagitis aliquam eleifend nisl</h5>
                  <h6 class="card-subtitle my-4">Posted 7 March, 2022</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                    sed do eiusmod tempor incididunt labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident,
                  </p>
                  <a href="#" class="card-link" style="color: white;">Read More
                    <button type="button" class="button-connect">
                      <img src="./assets/img/Arrow 2.png" alt="">
                    </button>
                  </a>
                </div>
              </div>
              <div class="card col-md-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title">Maecenas laoree efficiture sagitis aliquam eleifend nisl</h5>
                  <h6 class="card-subtitle my-4" style="color:#2370C8">Posted 7 March, 2022</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                    sed do eiusmod tempor incididunt labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident,
                  </p>
                  <a href="#" class="card-link" style="color: #2370C8;">Read More
                    <button type="button" class="button-connect">
                      <img src="./assets/img/Arrow 3.png" alt="">
                    </button>
                  </a>
                </div>
                </div>
              </div>
            </div>
            <div class="arrow-button d-flex justify-content-center" style="margin-left: 190px;" >
              <button type="button" class="btn">
                <img src="./assets/img/Group 5.png" alt="blue-right-arrow" width=auto>
              </button>
              <button type="button" class="btn">
                <img src="./assets/img/blue-righ.png" alt="blue-right-arrow" width=auto>
              </button>
            </div>
          </section>
        </div>
        
    
        <div class="linebreak d-flex justify-content-center">
          <img src="./assets/img/Line Break.png" alt="">
        </div>
    
        <section class="container my-5 image-content" data-aos="zoom-out-up">
          <div class="row">
            <h6 style="color: #2370C8;">OUR PROJECTS</h6>
            <h2>Take A Look At Our Latest Work</h2>
            <img src="./assets/img/Foto 1.png" alt="No Image" class="col-md-4 mb-3">
            <img src="./assets/img/Foto 2.png" alt="No Image" class="col-md-4 mb-3">
            <img src="./assets/img/foto 3.png" alt="No Image" class="col-md-4 mb-3">
            <img src="./assets/img/foto 4.png" alt="No Image" class="col-md-4">
            <img src="./assets/img/foto 5.png" alt="No Image" class="col-md-4">
            <img src="./assets/img/foto 6.png" alt="No Image" class="col-md-4">
          </div>
          <div class="arrow-button d-flex justify-content-center my-3">
            <button type="button" class="btn">
              <img src="./assets/img/Group 5.png" alt="blue-right-arrow" width=auto>
            </button>
            <button type="button" class="btn">
              <img src="./assets/img/blue-righ.png" alt="blue-right-arrow" width=auto>
            </button>
          </div>
        </section>

        <div class="linebreak d-flex justify-content-center mb-5">
          <img src="./assets/img/Line Break.png" alt="">
        </div> 

        <section>
          <div class="container">
              <div class="countertitle">
                <h5 style="color: #2370C8;">OUR SERVICES</h5>
              </div>
              <div class="countertitle mb-5">
                <h2>We Are Providing Many Services</h2>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card card-border" style="background-color: #E5F3FE;" data-aos="fade-up" data-aos-duration="1500"> 
                    <img src="./assets/img/rounded-photo1.png" class="card-img-top imagecard" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center; font-weight: bold; ">Solar System</h5>
                      <p class="card-text" style="color: #646464 !important; text-align: center;">Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit, sed do eiusmodtempor
                      incididunt ut labore et dolore</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card card-border" style="background-color: #E5F3FE;" data-aos="fade-up" data-aos-duration="1500">
                    <img src="./assets/img/rounded-photo2.png" class="card-img-top imagecard" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center; font-weight: bold; ">Consultancy Services</h5>
                      <p class="card-text" style="color: #646464 !important; text-align: center;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmodtempor
                        incididunt ut labore et dolore</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card card-border" style="background-color: #E5F3FE;" data-aos="fade-up" data-aos-duration="1500">
                    <img src="./assets/img/rounded-photo3.png" class="card-img-top imagecard" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center; font-weight: bold;">Process Automation & Instrumentation</h5>
                      <p class="card-text" style="color: #646464 !important; text-align: center;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmodtempor
                        incididunt ut labore et dolore</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
          
        <div class="linebreak d-flex justify-content-center mb-5 mt-5">
          <img src="./assets/img/Line Break.png" alt="">
        </div> 
    
        <section class="mb-5">
            <div class="container ">
              <div class="">
                <h5 style="color: #2370C8;">OUR PRODUCT</h5>
              </div>
              <div class="mb-5">
                <h2>Choose The Right Product For You</h2>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card hovercard" style="width: 22rem;" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="card-body">
                      <h4 class="card-title" style="color: #262A4E !important; text-align: center; font-weight: bold;">Product 1</h4>
                      <img src="./assets/img/rounded-card-img.png" class="card-img-top imagecard" alt="...">
                      <h3 class="card-title  mt-3 mb-3" style="color: #2370C8; text-align: center; font-weight: bold;">$50</h3>
                      <p class="card-text" style="text-align: center; margin: auto;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmodtempor
                        incididunt ut labore et dolore</p>
                      <a href="#" class="btn btn-primary middlebtn">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card hovercard" style="width: 22rem;" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="card-body">
                      <h4 class="card-title" style="color: #262A4E !important; text-align: center; font-weight: bold;">Product 2</h4>
                      <img src="./assets/img/rounded-card-img.png" class="card-img-top imagecard" alt="...">
                      <h3 class="card-title  mt-3 mb-3" style="color: #2370C8; text-align: center; font-weight: bold;">$99</h3>
                      <p class="card-text" style="text-align: center; margin: auto;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmodtempor
                        incididunt ut labore et dolore</p>
                      <a href="#" class="btn btn-primary middlebtn">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card hovercard" style="width: 22rem;" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="card-body ">
                      <h4 class="card-title" style="color: #262A4E !important; text-align: center; font-weight: bold;">Product 3</h4>
                      <img src="./assets/img/rounded-card-img.png" class="card-img-top imagecard" alt="...">
                      <h3 class="card-title mt-3 mb-3" style="color: #2370C8; text-align: center; font-weight: bold;">$150</h3>
                      <p class="card-text" style="text-align: center; margin: auto;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmodtempor
                        incididunt ut labore et dolore</p>
                      <a href="#" class="btn btn-primary middlebtn">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section style="background-color: #3782D7;">
          <div class="countertitle container mt-5 py-5" style="color: white;">
            <h3>We're trusted by clients</h3>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center pb-5">
            <div class="col">
              <div class="card" style="background-color: #1B5393;" data-aos="flip-down" data-aos-duration="1500">
                <img src="./assets/img/blank_profile.png" class="card-img-top imagecard" alt="no-image">
                <div class="card-body">
                  <h5 class="card-title" style="color: white; text-align: center;">Client</h5>
                  <p class="card-text" style="color: white; text-align: center;">There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour,
                    or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum, </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="background-color: #1B5393;" data-aos="flip-down" data-aos-duration="1500">
                <img src="./assets/img/blank_profile.png" class="card-img-top imagecard" alt="no-image">
                <div class="card-body">
                  <h5 class="card-title" style="color: white; text-align: center;">Client</h5>
                  <p class="card-text" style="color: white; text-align: center;">There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour,
                    or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum, </p>
                </div>
              </div>
            </div>
        </section>
    
        <section class="bataskonten pb-5" style="background-color: #F2F9FF;">
          <div class="countertitle mb-5" >
            <h2>We're working with our partners.</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4 d-flex justify-content-center">
            <div class="col">
              <div class="card mr-3" style="background-color: #F2F9FF;" data-aos="flip-down" data-aos-duration="1500">
                <img src="./assets/img/proflepic.png" class="card-img-top imagecard" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold; text-align: center;">Partner</h5>
                  <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mr-3" style="background-color: #F2F9FF;" data-aos="flip-down" data-aos-duration="1500"> 
                <img src="./assets/img/proflepic.png" class="card-img-top imagecard" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold; text-align: center;">Partner</h5>
                  <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="background-color: #F2F9FF;" data-aos="flip-down" data-aos-duration="1500"> 
                <img src="./assets/img/proflepic.png" class="card-img-top imagecard" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold; text-align: center;">Partner</h5>
                  <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    
        <section class="py-5" style="background-color: #6387A6;">
          <div class="mb-3">
            <h5 class="countertitle" style="color: white;">MEET OUR TEAM</h5>
            <h2 class="countertitle" style="color: #262A4E; font-weight: bold;">Our top dedicated professional</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4 d-flex justify-content-center">
            <div class="col">
              <div class="card animatecard" style="background-color: #F2F9FF;" data-aos="zoom-out-up" data-aos-duration="1500">
                <img src="./assets/img/ourteam.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold;">Name</h5>
                  <p class="card-text">Position</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card animatecard" style="background-color: #F2F9FF;" data-aos="zoom-out-up" data-aos-duration="1500">
                <img src="./assets/img/ourteam.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold;">Name</h5>
                  <p class="card-text">Position</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card animatecard" style="background-color: #F2F9FF;" data-aos="zoom-out-up" data-aos-duration="1500">
                <img src="./assets/img/ourteam.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold;">Name</h5>
                  <p class="card-text">Position</p>
                </div>
              </div>
        </section>

        @extends('partial.footer')
    </section>
      


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/countMe/countMe.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}

    <script>
      AOS.init();

      var fired = 0;
        $(window).scroll(function() {
        var hT = $('.countertitle').offset().top,
            hH = $('.countertitle').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
          console.log((hT-wH) , wS);
        if (wS > (hT+hH-wH) && fired == 0){
          $(".counter3").countMe(40,65);
          $(".counter1").countMe(40,2);
          $(".counter2").countMe(40,65);
          fired = 1;
        }});


      
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>