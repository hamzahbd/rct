<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Projeck.css">

<!-- Font -->
<link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
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
    <div class="container">
        <div class="title fs-1 mt-5">Projects</div>
    </div>

    <div class="container px-5 mb-xl-5">    
    
      @foreach ($projects as $project)
      <div class="row  d-flex mb-3 mt-3">
        <div class="col-4 ">
          
          @if ($project->image)
              <img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="">
          @else
              <img class="img-fluid" src="assets/img/image 1.png" alt="">
          @endif
                   
        </div>
        
        <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
                <span>{{ $project->tahun }}</span><br><br>
                <span>{{ $project->judul }}, {{ $project->mitra }} {{ $project->lokasi }}.</span>
        </div>
      </div>
      @endforeach

        <div class="row  d-flex">
            <div class="col-4 ">
                       <img src="assets/img/image 1.png" alt="">
              </div>
            
            <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
                    <span>2022</span><br><br>
                    <span>Independent High Level Alarm System in Oil Movement Production Area, PT Pertamina Refinery Unit V, Balikpapan.</span>
            </div>
        </div>
      
        <div class="row  d-flex">
          <div class="col-4 ">
                     <img src="assets/img/image 1.png" alt="">
            </div>
          
          <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
                  <span>2022</span><br><br>
                  <span>Independent High Level Alarm System in Oil Movement Production Area, PT Pertamina Refinery Unit V, Balikpapan.</span>
          </div>
      </div>
      
      <div class="row  d-flex">
        <div class="col-4 ">
                   <img src="assets/img/image 1.png" alt="">
          </div>
        
        <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
                <span>2022</span><br><br>
                <span>Independent High Level Alarm System in Oil Movement Production Area, PT Pertamina Refinery Unit V, Balikpapan.</span>
        </div>
    </div>

    <div class="row  d-flex">
      <div class="col-4 ">
                 <img src="assets/img/image 1.png" alt="">
        </div>
      
      <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
              <span>2022</span><br><br>
              <span>Independent High Level Alarm System in Oil Movement Production Area, PT Pertamina Refinery Unit V, Balikpapan.</span>
      </div>
  </div>

  <div class="row  d-flex">
    <div class="col-4 ">
               <img src="assets/img/image 1.png" alt="">
      </div>
    
    <div class="desc-contain col border-start border-4 border-dark h-25 p-6">
            <span>2022</span><br><br>
            <span>Independent High Level Alarm System in Oil Movement Production Area, PT Pertamina Refinery Unit V, Balikpapan.</span>
    </div>
</div>
        
</div>

</section>

   <!-- footer -->
   @include('partial.mini-footer')

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>


</body>
</html>