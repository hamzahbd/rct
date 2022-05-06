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
    
    
    <!-- Local js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Planet Intelligence</title>
  </head>
  <body >
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
    <section style="background-color: #E5F3FE; font-family: Roboto; min-height: 85vh;">
        <div class="container py-5">
            <div class="row">
               @include('profile.partial.sidebar')
                <div class="col-6 py-3 px-4" style="background-color: white; font-family: Roboto;">
                  <h3>Ubah Password</h3>
                  <p>Untuk keamanan akun Anda, mohon untuk tidak menyebarkan password Anda ke orang lain</p>
                  @if(session()->has('success'))
               <div class="alert alert-success col-lg-8" role="alert">
                 {{ session('success') }}
               </div>
             @endif
             
                  <form action="/profile/{{ $user->id }}/ubah-password" method="post"class="row g-3">
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label">Password Saat Ini :</label>
                      <input type="password" class="form-control @error('passwordini') is_invalid @enderror" id="passwordini" name="passwordini">
                      @error('passwordini')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Password Yang Baru :</label>
                      <input type="password" class="form-control @error('password') is_invalid @enderror" id="password" name="password">
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="col-12">
                      <label class="form-label">Konfirmasi Password:</label>
                      <input type="password" class="form-control @error('password_confirmation') is_invalid @enderror" id="password_confirmation" name="password_confirmation">
                      @error('password_confirmation')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary" value="Ganti">
                    </div>
                  </form>
                </div>
                <div class="col-3" style="background-color: white; font-family: Roboto;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a class="py-5" href="#" style="text-decoration: none;">Lupa Password?</a>
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