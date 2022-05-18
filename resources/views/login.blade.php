<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="assets/css/login.css"> --}}

    <!-- Vendor CSS style-->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>{{ $title }}</title>

  <style>
    input::-webkit-input-placeholder{
      font-size: 0.875em;
    }
  </style>
</head>
<body>
  
  <section class="gradient-custom h-auto" style="background:url('assets/img/baground.png')">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-light text-dark shadow p-3 mb-5 bg-white rounded" style="border-radius: 1rem;">
            <a href="/" class="text-dark-50 text-decoration-none ms-4 mt-2">Kembali</a>
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
                <form action="/login" method="post">
                @csrf

                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
                @endif

                @if(session()->has('LoginError'))
                  <div class="alert alert-danger" role="alert">
                    {{ session('LoginError') }}
                  </div>
                @endif

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-light-50 mb-5">Masukkan email dan password anda!</p>
    
                  <div class="form-outline form-light mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"/>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
    
                  <div class="form-outline form-light mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                    
                  </div>

                  {{-- <!-- Checkbox -->
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div> --}}
    
                  <p class="small mb-5 pb-lg-2"><a class="text-dark-50 text-decoration-none" href="#!">Lupa Password?</a></p>
    
                  <button class="btn btn-primary btn-lg px-5" type="submit">Login</button>
                </form>
  
                <div class="d-flex justify-content-center text-center mt-3 pt-1">
                  
                  <a href="{{ route('login.google') }}" class="text-primary"><i class="bi bi-google"></i></a>
                </div>
  
              </div>
  
              <div>
                <p class="mb-0">Tidak punya akun? <a href="/sign-up" class="text-dark-50 fw-bold text-decoration-none">Daftar</a>
                </p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @extends('partial.mini-footer')
    {{-- <section class="vh-100 gradient-custom">
      
        <div class="container py-5 h-100">
          <a href="/">Kembali</a>
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">

              

              <div class="card bg-white text-dark p-3" style="border-radius: 1rem; ">

                

                  <div class=" input mb-md-3 mt-md-3">
                  <form action="/login" method="post">
                  @csrf
                    <h2 class="fw-bold mb-5 text-uppercase text-center fs-1">L o g i n</h2>
                    @if(session()->has('success'))
                  <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                  </div>
                @endif
  
                @if(session()->has('LoginError'))
                  <div class="alert alert-danger" role="alert">
                    {{ session('LoginError') }}
                  </div>
                @endif
                    
                    <div class="form-outline form-white mb-4 email">
                        <label class="form-label fs-4" for="typeEmailX">Email</label>
                      <input type="email" name="email" id="email" class="form-control form-control-lg  border border-4 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
      
                    <div class="form-outline form-white mb-4 password">
                        <label class="form-label fs-4" for="typePasswordX">Password</label>
                      <input type="password" name="password" id="password" class="form-control form-control-lg border border-4 " >
                    </div>
      
                    <p><a class="text-decoration-none fs-5" href="#!">Forgot password?</a></p>
                    
                     
                    <button class="btn btn-primary" type="submit">log in</button>
                      

                      
                          
                      <a class="btn btn-primary" href="{{ route('login.google') }}" role="button">Google</a>

                      
                    
                    
                    
                  </form>
                  </div>
    
              </div>
            </div>
          </div>
        </div>

        <div class ="underline">
          <div class="copuright pt-3 border-top border-2 border-light  ">
            © Copyright 2022 pt.Ruang Cipta Teknologi All rights Reserved.
          </div>
        </div>
      </section> --}}

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>