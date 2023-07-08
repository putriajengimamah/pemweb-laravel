<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      {{-- Bootstrap Icons 2 --}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

      <!-- My CSS -->
      <style>
        :root{
          /* Font */
          --heading-font: "Great Vibes", cursive;
          --main-font: "Poppins", sans-serif;
        }

        body {
          font-family: var(--main-font);
        }

        .navbar-brand{
          font-family: var(--heading-font);
          font-weight: 450;
          font-size: 30px;
        }

        /* membuat line dibawah navigasi */
        .nav-item:hover::after {
          content: "";
          display: block;
          border-bottom: 3px solid #1d1350;
          width: 50%;
          margin: auto;
          padding-bottom: 5px;
          margin-bottom: -8px;
        }

        /* ukuran font navbar */
        .navbar-collapse {
          font-size: 17px;
        }

        /* CSS jumbotron/hero section */
        .jumbotron {
          padding-top: 10rem;
          background-color: #645caa;
          color: #1d1350;
          font-weight: bold;
        }

        /* memberikan jarak antara image dengan h1 */
        .jumbotron .display-4 {
          padding-top: 1rem;
          font-family: var(--heading-font);
        }

        /* CSS pada p jumbotron/hero section */
        .jumbotron .lead {
          padding-bottom: 9rem;
        }

        /* container fitur panel */
        .fitur-panel {
          background-color: #b1b2ff;
          color: #1d1350;
          border-radius: 12px;
          margin-top: -100px;
        }

        /* Explain/penjelasan Smart City */
        .explainsc {
          margin-top: 120px;
          color: #1d1350;
          font-size: 17px;
          /* padding-bottom: 1rem; */
          margin-bottom: -50px;
        }

        .explainsc h2{
          font-family: var(--heading-font);
          font-weight: 550;
        }

        /* Product on Home */
        #productonhome {
          background-color: #b1b2ff;
          font-size: 14px;
        }

        #productonhome .card {
          background-color: #645caa;
          border-radius: 12px;
          color: #ffffff;
        }

        /* Banner */
        .banner {
          margin-bottom: -50px;
        }

        /* Review */
        #review {
          background-color: #b1b2ff;
          font-size: 14px;
        }

        #review .card{
          background-color: #b1b2ff;
        }

        /* Footer */
        footer {
          background-color: #645caa;
          color: #ffffff;
        }

        footer .aboutbeauty{
          font-family: var(--heading-font);
          font-size: 30px;
        }
      </style>

      {{-- Google Font --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@600&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet" />

      <title>Home BeautyCare | Putri Ajeng Imamah</title>
  </head>

  <body>
    
    @include('partials.navbar'); 

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/home1.png" alt="jumbotronbyputri" width="350" class="img-fluid" />
      <h1 class="display-4">BeautyCare</h1>
      <p class="lead">Rekomendasi Beauty Product</p>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Container Panel -->
    <div class="container">
      <!-- Fitur Panel -->
      <div class="row justify-content-center">
        <div class="col-10 fitur-panel">
          <!-- Panel kolom -->
          <div class="row text-center">
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/178-moisturizer"><img src="img/iconmoisturizer.png" alt="moisturize" width="125" /></a>
              <h6>Moisturize</h6>
            </div>
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/2301-sun-care"><img src="img/iconsunscreen.png" alt="sunscreen" width="125" /></a>
              <h6>Sunscreen</h6>
            </div>
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/179-treatment"><img src="img/icontreatment.png" alt="treatment" width="125" /></a>
              <h6>Treatment</h6>
            </div>
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/177-cleanser"><img src="img/iconcleanser.png" alt="cleanser" width="125" /></a>
              <h6>Cleanser</h6>
            </div>
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/6337-eye-care"><img src="img/iconeyecare.png" alt="eyecare" width="125" /></a>
              <h6>Eyecare</h6>
            </div>
            <div class="col-md">
              <br>
              <a href="https://www.sociolla.com/2303-mask"><img src="img/iconfacemask.png" alt="facemask" width="125" /></a>
              <h6>Facemask</h6>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Fitur Panel -->
    </div>
    <!-- Akhir Container Panel-->

    <!-- Explain BeautyCare -->
    <section id="explain">
      <div class="container explainsc">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="fs-1">Your Beauty Journey</h2>
            <p>We believe that beauty is for everyone and we're here to make sure everyone has a share. We prioritize honesty and we want to be responsible in our beauty education.</p>
            <a class="btn btn-outline-primary" href="#" role="button">Selengkapnya</a>
          </div>
          <div class="col-md-4 text-center">
            <img src="img/beautytips.png" alt="beautytips" class="img-fluid" width="420" />
          </div>
        </div>
      </div>

      <!-- gelombang -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="
            #b1b2ff"
          fill-opacity="1"
          d="M0,224L26.7,213.3C53.3,203,107,181,160,186.7C213.3,192,267,224,320,218.7C373.3,213,427,171,480,154.7C533.3,139,587,149,640,160C693.3,171,747,181,800,165.3C853.3,149,907,107,960,117.3C1013.3,128,1067,192,1120,202.7C1173.3,213,1227,171,1280,154.7C1333.3,139,1387,149,1413,154.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
      <!-- akhir gelombang -->
    </section>
    <!-- Akhir Explain BeautyCare -->

    <!-- Product di Home -->
    <section id="productonhome">
      <br><br><br><br><br>
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Our Recommendation Product</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <a href="https://www.sociolla.com/face-wash/13188-nivea-sparkling-white-whitening-facial-foam-100-ml"><img src="img/niveafw.png" class="card-img-top" alt="niveafw"/></a>
              <div class="card-body">
                <h5 class="card-title text-center">Nivea Sparkling <br> White</h5>
                <p class="card-text text-center">Efektif membersihkan dan mencerahkan kulit wajah dari debu, polusi, dan kotoran. Cocok digunakan sehari-hari, untuk segala jenis kulit</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <a href="https://www.sociolla.com/face-wash/10723-renew-you-anti-aging-facial-wash"><img src="img/wardahfw.png" class="card-img-top" alt="wardahfw"/></a>
              <div class="card-body">
                <h5 class="text-center">Wardah Renew <br> You</h5>
                <p class="card-text text-center">Dilengkapi dengan natural AHA guna menyegarkan dan mencerahkan kulit wajah, mengangkat sel kulit mati, mengangkat kotoran</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <a href="https://www.sociolla.com/face-wash/26435-white-beauty-spot-less-glow-facial-foam"><img src="img/pondsfw.png" class="card-img-top" alt="pondsfw"/></a>
              <div class="card-body">
                <h5 class="text-center">Pond's White <br> Beauty </h5>
                <p class="card-text text-center">Micro-exfoliating foam dengan lembut mengangkat sel-sel kulit mati dan vitamin B3+nya menyamarkan bintik hitam</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <a href="https://www.sociolla.com/face-wash/13888-sakura-white-whip-foam"><img src="img/garnierfw.png" class="card-img-top" alt="garnierfw"/></a>
              <div class="card-body">
                <h5 class="text-center">Garnier Sakura <br> White</h5>
                <p class="card-text text-center">Formula lembut sesuai untuk kulit sensitif, Hyaluron Serum membuat kulit lebih lembab dan glowing dalam 3 hari pertama</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- gelombang -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="
            #FFFfff"
          fill-opacity="1"
          d="M0,224L26.7,213.3C53.3,203,107,181,160,186.7C213.3,192,267,224,320,218.7C373.3,213,427,171,480,154.7C533.3,139,587,149,640,160C693.3,171,747,181,800,165.3C853.3,149,907,107,960,117.3C1013.3,128,1067,192,1120,202.7C1173.3,213,1227,171,1280,154.7C1333.3,139,1387,149,1413,154.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Product di Home -->

    <!-- Banner BeautyCare -->
    <section id="banner">
      <div class="container banner">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <img src="img/bannerflashsale.png" alt="bannerflashsale" class="img-fluid" width="420" />
          </div>
          <div class="col-md-6 text-center">
            <img src="img/bannergiveaway.png" alt="bannergiveaway" class="img-fluid" width="420" />
          </div>
        </div>
      </div>

      <!-- gelombang -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="
            #b1b2ff"
          fill-opacity="1"
          d="M0,224L26.7,213.3C53.3,203,107,181,160,186.7C213.3,192,267,224,320,218.7C373.3,213,427,171,480,154.7C533.3,139,587,149,640,160C693.3,171,747,181,800,165.3C853.3,149,907,107,960,117.3C1013.3,128,1067,192,1120,202.7C1173.3,213,1227,171,1280,154.7C1333.3,139,1387,149,1413,154.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
      <!-- akhir gelombang -->
    </section>
    <!-- Akhir Banner BeautyCare -->

    <!-- Review -->
    <section id="review">
      <br><br><br><br><br>
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>What people said about us?</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/reviewone.png" class="card-img-top" alt="review1">
              <div class="card-body">
                <h5 class="card-title text-center">Aurorae</h5>
                <p class="card-text text-center">This one smells fantastic and works great as a moisturizer for those areas that need extra care.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/reviewtwo.png" class="card-img-top" alt="review1">
              <div class="card-body">
                <h5 class="card-title text-center">Aurorae</h5>
                <p class="card-text text-center">This one smells fantastic and works great as a moisturizer for those areas that need extra care.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/reviewthree.png" class="card-img-top" alt="review2">
              <div class="card-body">
                <h5 class="card-title text-center">Zelin</h5>
                <p class="card-text text-center">This one smells fantastic and works great as a moisturizer for those areas that need extra care.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- gelombang -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="
            #645caa"
          fill-opacity="1"
          d="M0,224L26.7,213.3C53.3,203,107,181,160,186.7C213.3,192,267,224,320,218.7C373.3,213,427,171,480,154.7C533.3,139,587,149,640,160C693.3,171,747,181,800,165.3C853.3,149,907,107,960,117.3C1013.3,128,1067,192,1120,202.7C1173.3,213,1227,171,1280,154.7C1333.3,139,1387,149,1413,154.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
      <!-- akhir gelombang -->
    </section>
    <!-- Akhir Banner BeautyCare -->


    <!-- Footer -->
    <footer class="pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4 font-weight-bold aboutbeauty">BeautyCare</h5>
            <p>
              <i class="bi bi-instagram"></i> beautycare
            </p>
            <p>
              <i class="bi bi-facebook"></i> Beauty Care 
            </p>
            <p>
              <i class="bi bi-twitter"></i> beauty.care 
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4 font-weight-bold">Contact Us</h5>
            <p>
              <i class="bi bi-envelope-heart"></i> beautycare@gmail.com
            </p>
            <p>
              <i class="bi bi-telephone"></i> +62 8888 7777 666
            </p>
          </div>
          
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>