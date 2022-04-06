<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/Contact.css">

    
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
        <div class=" container pt-5 ">
            <div class="row">
                <div class="col-8">
                    <h3>Get in Touch</h3><br><br>
                    <div class="d-flex">
                    <span class="col-6 ">
                        <input class="form border-bottom border-2 border-grey " type="text" placeholder="Name">
                    </span>
                    <span class="col-6">

                        <input class="form border-bottom border-2 border-grey " type="text" placeholder="Email" >

                    </span>
                </div>
                <div>
                    <input class="form border-bottom border-2 border-grey pt-4 w-100 " type="text" placeholder="Subject">
                </div>
                <div>
                    <input class="message form border-bottom border-2 border-grey pt-4 w-100  " type="text" placeholder="Message">
                </div>
                </div>
              
              
                <div class="col-4">
                    <h3>Contact</h3>


                    <div class="d-flex pt-3">
                        
                        <span> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                        </span>
                          <div class="ps-3">
                        <span >jln.diponegoro, gg.swadaya rt.38 kecamatan karang joang balikpapan utara balikpapan kalimantan timur </span>
                    </div>
                    </div>

                    <div class="d-flex pt-3">
                        
                        <span> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                        </span>
                          <div class="ps-3">
                        <span >+6285279412694 </span>
                    </div>
                    </div>

                    <div class="d-flex pt-3">
                        
                        <span> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                              </svg>
                        </span>
                          <div class="ps-3">
                        <span >contact@ruangciptateknologi.com </span>
                    </div>
                    </div>
                    
                    
                  </div>

                  <div class="justify-content-center ms-5" >
                  <div class="mapouter ">
                    <div class="gmap_canvas">
                    
                    <iframe width="650" height="303" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Ruhui%20Rahayu%20A1%20No%2011,%20RT.01,%20Gn.%20Bahagia,%20Kec.%20Balikpapan%20Selatan,%20Kota%20Balikpapan,%20Kalimantan%20Timur%2076114&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    
                    <a href="https://123movies-to.org"></a><br>
                    
                    
                    <a href="https://www.embedgooglemap.net">insert google map html</a>
                    
                
                  
                </div>
            </div>

    
        </div>
    </section>

    <section>
      <div class ="underline pt-1">
        <div class="copyright pt-3 border-top border-2 border-dark  ">
          © Copyright 2022 pt.Ruang Cipta Teknologi All rights Reserved.
        </div>
      </div>
    </section>

    
</body>
</html>