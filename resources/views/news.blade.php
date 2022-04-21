<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <!-- Local Css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/news.css">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
        
   </head>
   <body>
     <!-- navbar -->
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
      <div class="wrapper m-5">
          <div class="slide-1">
         <div class="carousel owl-carousel">
            <div class="card card-1">
               <img src="assets/img/image 1.png" alt="">
            </div>
            <div class="card card-1">
                <img src="assets/img/image 1.png" alt="">
             </div>
             <div class="card card-1">
                <img src="assets/img/image 1.png" alt="">
             </div>
             <div class="card card-1">
                <img src="assets/img/image 1.png" alt="">
             </div>

         </div>

         <p>PT. Ruang Cipta Teknologi memenuhi undangan diskusi bersama Mas Menteri Pendidikan, Kebudayaan, Riset dan Teknologi (Mendikbudristek) sebagai apresiasi mitra penerima program studi independent dan magang bersertifikat (MSIB) Kampus Merdeka.</p>

         <div class="slide-2" style="margin-top: 166px;">
            <div class="carousel owl-carousel">
               <div class="card card-1">
                  <img src="assets/img/image 1.png" alt="">
               </div>
               <div class="card card-1">
                   <img src="assets/img/image 1.png" alt="">
                </div>
                <div class="card card-1">
                   <img src="assets/img/image 1.png" alt="">
                </div>
                <div class="card card-1">
                   <img src="assets/img/image 1.png" alt="">
                </div>
   
            </div>
        </div>

         <p>PT. Ruang Cipta Teknologi memenuhi undangan diskusi bersama Mas Menteri Pendidikan, Kebudayaan, Riset dan Teknologi (Mendikbudristek) sebagai apresiasi mitra penerima program studi independent dan magang bersertifikat (MSIB) Kampus Merdeka.</p>
      </div>
</section>

<!-- footer -->
@include('partial.mini-footer')

      <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
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
             }
           }
         });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html> 