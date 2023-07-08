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
          padding-bottom: 1rem;
        }

        /* Public Service */
        #pubserberanda {
          background-color: #b1b2ff;
          font-size: 14px;
        }

        .card {
          background-color: #d2daff;
          border-radius: 12px;
        }

        /* Footer */
        footer {
          background-color: #645caa;
        }
      </style>

      {{-- Google Font --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">

      <title>Home BeautyCare | Putri Ajeng Imamah</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #645caa">
      <div class="container">
        <a class="navbar-brand" href="#">
          BeautyCare
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-1">
              <a class="nav-link active" aria-current="page" href="#beranda">Home</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="./profil.php">Categories</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="./hubungikami.php">Product</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="./hubungikami.php">Review</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="./hubungikami.php">Beauty Assistant</a>
            </li>
            <li class="d-flex mx-1">
              <li class="nav-icons">
                <a class="nav-link" href="./hubungikami.php"><i class="fa-solid fa-magnifying-glass"></i></a>
              </li>
              <li class="nav-icons">
                <a class="nav-link" href="./hubungikami.php"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>
              <li class="nav-icons">
                <a class="nav-link" href="./hubungikami.php"><i class="fa-regular fa-user"></i></a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/img1.png" alt="jumbotronbyputri" width="350" class="img-fluid" />
      <h1 class="display-4">B'SmartCity</h1>
      <p class="lead">Jelajahi Brebes Smart City</p>
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
              <a href="http://data.bandung.go.id/arimbi/#/pmi"><img src="img/stokdarah.png" alt="stokdarah" width="125" /></a>
              <h6>Stok <br />Darah</h6>
            </div>
            <div class="col-md">
              <a href="http://data.bandung.go.id/"><img src="img/opendata.png" alt="opendata" width="125" /></a>
              <h6>Open <br />Data</h6>
            </div>
            <div class="col-md">
              <a href="https://www.lapor.go.id/"><img src="img/lapor.png" alt="lapor" width="125" /></a>
              <h6>Lapor!</h6>
            </div>
            <div class="col-md">
              <a href="http://smartcityexpo.bandung.go.id/"><img src="img/VR.png" alt="VR" width="125" /></a>
              <h6>Virtual <br />360</h6>
            </div>
            <div class="col-md">
              <a href="https://smartcity.bandung.go.id/services/cctv"><img src="img/pemantauan.png" alt="pemantauan" width="125" /></a>
              <h6>Pemantauan</h6>
            </div>
            <div class="col-md">
              <a href="http://data.bandung.go.id/arimbi/#/rumahsakit"><img src="img/bedoccupancy.png" alt="bedoccupancy" width="125" /></a>
              <h6>Bed <br />Occupancy</h6>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Fitur Panel -->
    </div>
    <!-- Akhir Container Panel-->

    <!-- Sedikit Explain tentang Smart City -->
    <section id="explain">
      <div class="container explainsc">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="fs-1">B'SmartCity</h2>
            <p>Menghubungkan, Memonitor, dan Mengendalikan berbagai sumber daya yang ada di dalam kota dengan lebih efektif dan efisien sehingga kota lebih cepat dan akurat dalam memberikan layanan dan solusi kepada warganya.</p>
            <a class="btn btn-outline-primary" href="./profil.php" role="button">Selengkapnya</a>
          </div>
          <div class="col-md-4 text-center">
            <img src="img/img2.png" alt="image2explain" class="img-fluid" width="420" />
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
    <!-- Akhir sedikit explain tentang Smart City -->

    <!-- Beberapa layanan yg tampil di home -->
    <section id="pubserberanda">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Public Service</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/kependudukan.png" class="card-img-top" alt="kependudukan" />
              <div class="card-body">
                <h5 class="card-title text-center">Kependudukan</h5>
                <p class="card-text text-center">Membuat Kartu Tanda Penduduk, Kartu Keluarga dll.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/emergency.png" class="card-img-top" alt="emergency" />
              <div class="card-body">
                <h5 class="text-center">Emergency</h5>
                <p class="card-text text-center">Pelayanan gawat darurat, Pelayanan Masyarakat dll.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/perizinan.png" class="card-img-top" alt="perizinan" />
              <div class="card-body">
                <h5 class="text-center">Perizinan</h5>
                <p class="card-text text-center">Izin usaha, izin mendirikan bangunan, dll.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="width: 17rem">
            <div class="card">
              <img src="img/perpajakan.png" class="card-img-top" alt="perpajakan" />
              <div class="card-body">
                <h5 class="text-center">Perpajakan</h5>
                <p class="card-text text-center">Pelayanan pajak secara online, dll.</p>
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
    </section>
    <!-- Akhir layanan -->

    <!-- Footer -->
    <footer class="text-white text-center pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/putrii.ajeng/" class="text-white fw-bold">Putri Ajeng Imamah</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>