<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/Service.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

</head>
<body>
<!-- header -->
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
<!-- isi -->
    <section>
    <div class="container pt-5">
        <h1>Services</h1>

    </div>
    <div class="container d-flex">
        <div class="row ">
            <div class="col">
                       <img src="assets/img/image 1.png" alt="">
              </div>
            
            <div class="desc-contain col ">
                    <h2>Solar Syistem</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus assumenda dicta autem. Dignissimos sequi obcaecati rerum nostrum odio consequatur, ipsam impedit ut explicabo? Quas magni eum labore recusandae aspernatur?</p>
                    <button type="button" class="btn btn-primary m-6" id="btn-desc">Read More</button>
            </div>
        </div>
    </div>

    <div class="border border-1 container border-dark"></div>

    <div class="container d-flex">
        <div class="row ">
            <div class="desc-contain col ">
                    <h2>Solar Syistem</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus assumenda dicta autem. Dignissimos sequi obcaecati rerum nostrum odio consequatur, ipsam impedit ut explicabo? Quas magni eum labore recusandae aspernatur?</p>
                    <button type="button" class="btn btn-primary m-6">Read More</button>
            </div>
            <div class="col">
                       <img src="assets/img/image 1.png" alt="">
              </div>
            
        </div>

    </div>

    <div class="border border-1 container border-dark"></div>

    <div class="container d-flex">
        <div class="row ">
            <div class="col">
                       <img src="assets/img/image 1.png" alt="">
              </div>
            
            <div class="desc-contain col ">
                    <h2>Solar Syistem</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus assumenda dicta autem. Dignissimos sequi obcaecati rerum nostrum odio consequatur, ipsam impedit ut explicabo? Quas magni eum labore recusandae aspernatur?</p>
                    <button type="button" class="btn btn-primary m-6">Read More</button>
            </div>
        </div>

    </div>
  </section>
<!-- footer -->
@include('partial.mini-footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>