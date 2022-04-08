<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  
    <section class="vh-100 gradient-custom">
      
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
      </section>

</body>
</html>