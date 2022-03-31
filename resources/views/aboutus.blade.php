<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/About_us.css">
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


    <section >
        <div class="container text-center pb-5  ">
            <div class=" row p-5 ">
                <div class="col-8 text-start desc-project">
                    <h4>We design, create, and build digital projects.</h4>
                    <p class="p-4">PT. Ruang Cipta Teknologi is a transformation company from CV. Planet Intelligent. PT. Ruang Cipta Teknologi is a company that focuses on Engineering Services and Product Development for energy and environment sector.
                    </p>

                    <ul class="px-3 ">
                        <li>Based in Balikpapan, East Kalimantan
                        </li>
                        <li>Established in 2018 as Indonesian company (CV. Planet Intelligent)
                        </li>
                        <li>Capability of engineering, product development and training</li>
                    </ul>
                </div>

                <div class="col-4 img-project">
                    <img src="assets/img/Pekerja.png">
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <span class="text-center border-bottom border-dark  border-2 fw-bold ">VISION</span>
                    <p style="font-size:13px" class="pt-5">Become a internasional Company in Energy and Automation Systems</p>
                </div>

                <div class="col ">
                    <span class="text-center border-bottom border-dark  border-2 fw-bold">MISSION</span>
                    <ul class="text-start list-ul2 pt-5">
                        <li>Become a company that is able to compete globally in the fields of energy, IoT, and automation
                        </li>
                        <li>To be part of the acceleration of the nation’s independence in the field of technology
                        </li>
                        <li>Become a company that produces national products that are able to compete globally
                        </li>
                        <li>Providing appropriate engineering solutions to customers (clients) according to their needs</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    

    <!-- footer -->
    <section>
        <div class ="underline">
          <div class="copyright pt-3 border-top border-2 border-dark  ">
            © Copyright 2022 pt.Ruang Cipta Teknologi All rights Reserved.
          </div>
        </div>
      </section>
</body>
</html>