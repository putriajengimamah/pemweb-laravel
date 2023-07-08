<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- Google Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  {{-- BoxIcons --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  {{-- Link CSS --}}
  <link rel="stylesheet" href="css/style.css">


  {{-- Link JQUERY --}}
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


  <title>BeautyCare | Home</title>
</head>

<body>

  <header>
    <div class="navbar">
      <div class="container">
        <a href="#" class="logo">BeautyCare</a>
        <div class="menu-wrapper">
        <div class="menuClose bx bx-x"></div>
          <div class="menu">
            <a href="/" class="active nav-link">Home</a>
            <a href="/product" class="nav-link">Product</a>
            <a href="/review" class="nav-link">Review</a>
            <a href="/beautyassistant" class="nav-link">Beauty Assistant</a>
          </div>
          <div class="icons">
            <i class='bx bx-search icon'></i>
            <i class='bx bx-shopping-bag icon'></i>
            <i class='bx bx-user icon'></i>
          </div>
        </div>
        <div class="menuOpen bx bx-grid-alt" ></div>
      </div>
    </div>
  </header>
  
  {{-- Home Start --}}
  <section class="home" id="home">
    <div class="container">
      <div class="content-left">
        <h1 class="heading">Your Beauty Journey</h1>
        <p class="subheading">We believe that beauty is for everyone and we're here to make sure everyone has a share. We prioritize honesty and we want to be responsible in our beauty education.</p>
        <div class="btn-home">
          <a href="#" class="btn-explore">Explore</a>
          <a href="#" class="btn-beautyassistant">Beauty Assistant</a>
        </div>
      </div>
      <div class="content-right">
        {{-- Swiper --}}
        <div class="swiper mySwiperHome">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/home1.png" alt="" width="450">
            </div>
            <div class="swiper-slide">
              <img src="img/home2.png" alt="" width="450">
            </div>
            <div class="swiper-slide">
              <img src="img/home3.png" alt="" width="450">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  {{-- Home End --}}

  {{-- Panel Start --}}
  <div class="panel">
    <div class="container">
      <div class="item">
        <div class="icon">
          <img src="img/iconlip.png" alt="" width="45px">
        </div>
        <div class="text-panel">
          <h5 class="title">Lip Care</h5>
          <p class="subtitle">All about lip care product, brand, etc.</p>
        </div>
      </div>
      <div class="item">
        <div class="icon">
          <img src="img/iconeye.png" alt="" width="45px">
        </div>
        <div class="text-panel">
          <h5 class="title">Eye Care</h5>
          <p class="subtitle">All about eye care product, brand, etc.</p>
        </div>
      </div>
      <div class="item">
        <div class="icon">
          <img src="img/iconfw.png" alt="" width="45px">
        </div>
        <div class="text-panel">
          <h5 class="title">Clensing</h5>
          <p class="subtitle">All about cleansing product, brand, etc.</p>
        </div>
      </div>
    </div>
  </div>
  {{-- Panel End --}}

  {{-- Service Start --}}
  <section class="service" id="service">
    <div class="container">
      <div class="row1">
        <p class="label">WHAT WE SERVE</p>
        <h3 class="title">
          Your Beauty Journey Start Here
        </h3>
      </div>
      <div class="row2">
        <div class="img-box">
          <div class="detail">
            <a href="#">Asli & 100% BPOM</a>
          </div>
          <img src="img/service3.png" alt="">
        </div>
        <div class="img-box">
          <div class="detail">
            <a href="#">Promo Cantik Tiap Hari</a>
          </div>
          <img src="img/service2.png" alt="">
        </div>
        <div class="img-box">
          <div class="detail">
            <a href="#">Review Terpercaya</a>
          </div>
          <img src="img/service1.png" alt="">
        </div>
      </div>
    </div>
  </section>
  {{-- Service End --}}

  {{-- Banner Start --}}
  <div class="banner">
    <div class="container">
      <div class="banner-left">
        <a href="#" class="img-box">
          <img src="img/banner1.png" alt="">
        </a>
      </div>
      <div class="banner-right">
        <a href="#" class="img-box">
          <img src="img/banner2.png" alt="">
        </a>
        <br>
        <a href="#" class="img-box">
          <img src="img/banner3.png" alt="">
        </a>
      </div>
    </div>
  </div>
  {{-- Banner End --}}

  {{-- Product Start --}}
  <section class="product">
    <div class="container">
      <div class="row1">
        <div class="title-section">
          <p class="label">OUR PRODUCT</p>
          <h3 class="heading">Find thousands of your favorite beauty products</h3>
        </div>
        <div class="btn-slider">
          <i class='bx bxs-chevron-left-circle'></i>
          <i class='bx bxs-chevron-right-circle' ></i>
        </div>
      </div>
      <div class="row2">
        <div class="swiper mySwiperProduct">
          <div class="swiper-wrapper">
            <div class="swiper-slide card-product">
              <img src="img/safifw.png" alt="" width="150px">
              <div class="card-body">
                <a href="#" class="product-name">Safi</a>
                <div class="star">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                </div>
                <p class="description">Safi Dermasafe Gel Cleanser</p>
                <div class="price">Rp. 75.000</div>
              </div>
              <a href="#" class="btn-card"><i class='bx bx-shopping-bag' ></i></a>
            </div>
            <div class="swiper-slide card-product">
              <img src="img/niveafw.png" alt="" width="150px">
              <div class="card-body">
                <a href="#" class="product-name">Safi</a>
                <div class="star">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                </div>
                <p class="description">Safi Dermasafe Gel Cleanser</p>
                <div class="price">Rp. 75.000</div>
              </div>
              <a href="#" class="btn-card"><i class='bx bx-shopping-bag' ></i></a>
            </div>
            <div class="swiper-slide card-product">
              <img src="img/skintificfw.png" alt="" width="150px">
              <div class="card-body">
                <a href="#" class="product-name">Safi</a>
                <div class="star">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                </div>
                <p class="description">Safi Dermasafe Gel Cleanser</p>
                <div class="price">Rp. 75.000</div>
              </div>
              <a href="#" class="btn-card"><i class='bx bx-shopping-bag' ></i></a>
            </div>
            <div class="swiper-slide card-product">
              <img src="img/laneigefw.png" alt="" width="150px">
              <div class="card-body">
                <a href="#" class="product-name">Safi</a>
                <div class="star">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                </div>
                <p class="description">Safi Dermasafe Gel Cleanser</p>
                <div class="price">Rp. 75.000</div>
              </div>
              <a href="#" class="btn-card"><i class='bx bx-shopping-bag' ></i></a>
            </div>
            <div class="swiper-slide card-product">
              <img src="img/cetaphilfw.png" alt="" width="150px">
              <div class="card-body">
                <a href="#" class="product-name">Safi</a>
                <div class="star">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                </div>
                <p class="description">Safi Dermasafe Gel Cleanser</p>
                <div class="price">Rp. 75.000</div>
              </div>
              <a href="#" class="btn-card"><i class='bx bx-shopping-bag' ></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Produk End --}}

  {{-- Review Start --}}
  <section class="review">
    <div class="container">
      <div class="content-left">
        <p class="label">TESTIMONI</p>
        <h3 class="heading">What people said about us?</h3>
        <p class="subheading">Find product reviews complete with ratings, duration of usage, where to buy, and recommendation from fellow beauty enthusiasts with big love for everything that makes you glow!</p>
      </div>
      <div class="content-right">
        <div class="swiper mySwiperReview">
          <div class="swiper-wrapper">
            <div class="swiper-slide card-review">
              <p class="date">17/8/22</p>
              <div class="profile">
                <img src="img/review1.png" alt="" class="card-review-img">
                <p class="name">Kety</p>
              </div>
              <div class="card-body">
                <i class='bx bxs-quote-alt-left' ></i>
                <p class="text-review">
                  This one smells fantastic and works great as a moisturizer for those areas that need extra care.
                </p>
              </div>
            </div>
            <div class="swiper-slide card-review">
              <p class="date">20/6/21</p>
              <div class="profile">
                <img src="img/review2.png" alt="" class="card-review-img">
                <p class="name">Putri</p>
              </div>
              <div class="card-body">
                <i class='bx bxs-quote-alt-left' ></i>
                <p class="text-review">
                  This one smells fantastic and works great as a moisturizer for those areas that need extra care.
                </p>
              </div>
            </div>
            <div class="swiper-slide card-review">
              <p class="date">25/4/23</p>
              <div class="profile">
                <img src="img/review3.png" alt="" class="card-review-img">
                <p class="name">Bluesky</p>
              </div>
              <div class="card-body">
                <i class='bx bxs-quote-alt-left' ></i>
                <p class="text-review">
                  This one smells fantastic and works great as a moisturizer for those areas that need extra care.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  {{-- Review End --}}

  {{-- Beauty Assistant Start--}}
  <section class="assistant section-margin">
    <div class="container">
      <div class="content-left">
        <p class="label">BEAUTY ASSISTENT</p>
        <h3 class="heading">
          We help our customer to find the best recomendation product for them
        </h3>
        <div class="thumbnail-assistant">
          <img src="img/beautyassistant.png" alt="" class="immg-contact" width="350px">
        </div>
      </div>
      <div class="content-right">
        <form action="" class="form-group">
          <input type="text" placeholder="Full Name">
          <input type="email" placeholder="Email Address" name="" id="">
          <textarea 
            name="" 
            id="" 
            cols="30" 
            rows="10">
          </textarea>
          <button type="submit" class="btn-assistant">
            Want Recomendation Product
          </button>
        </form>
      </div>
    </div>
  </section>
  {{-- Beauty Assistant End --}}

  {{-- Footer Start --}}
  <footer class="footer section-margin">
    <div class="container">
      <div class="row1">
        <div class="content-left">
          <p class="logo">BeautyCare</p>
          <a href="#" class="email">beautycare.com</a>
          <p class="phone">+6285888999777</p>
          <div class="icons">
            <a href="#"><i class='bx bxl-whatsapp' ></i></a>
            <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
          </div>
        </div>

        <div class="content-right">
          <div class="col1">
            <h3>Service</h3>
            <ul>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
            </ul>
          </div>
          <div class="col2">
            <h3>Information</h3>
            <ul>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
            </ul>
          </div>
          <div class="col3">
            <h3>Helpfull Link</h3>
            <ul>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
            </ul>
          </div>
          <div class="col4">
            <h3>Address</h3>
            <ul>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
              <li>Beauty Consultant</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row2">
        <p>&copy;Copyright 2023 All Right Reserved | Build by <a href="#">Putri Ajeng Imamah</a></p>
      </div>
    </div>
  </footer>
  {{-- Footer End --}}
  
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <script src="js/script.js"></script>
</body>
</html>