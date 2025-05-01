<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sipafestival 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    .navbar-brand img {
      max-height: 65px;
    }
    .navbar-custom {
      background: white;
      border-bottom: 1px solid #ddd;
    }
    .navbar-nav .nav-link {
      color: black !important;
      font-weight: bold;
      margin-left: 1.2rem;
      transition: all 0.3s ease;
      position: relative;
      text-transform: uppercase;
    }
    .navbar-nav .nav-link:hover {
      color: #B8141E !important;
    }
    .navbar-nav .nav-link.active {
      color:#B8141E !important;
    }
    .navbar-toggler {
      border: none;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280,0,0,0.7%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    .header-section {
      position: relative;
      overflow: hidden;
      height: 100vh;
      color: #F0D97B;
    }

    .header-section img.bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      mask-image: linear-gradient(to bottom, rgba(0,0,0,1),rgba(0,0,0,1), rgba(0,0,0,0));
      -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1),rgba(0,0,0,1), rgba(0,0,0,0));
    }

    .header-section .container {
      position: absolute;
      top: 20%;
      left: 5%;
      max-width: 600px;
      z-index: 1;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .header-section img.text {
      width: 130%;
      height: auto;
    }

    .header-section p {
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0;
    }

    .btn-findmore {
      background-color: transparent;
      color: #F0D97B;
      border: 2px solid #F0D97B;
      border-radius: 8px;
      font-size: 15px;
      padding: 10px 20px; /* cukup, tidak perlu terlalu besar */
      font-weight: bold;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      width: auto; /* pastikan lebarnya menyesuaikan isi */
      max-width: 200px; /* optional, jika ingin batas maksimal */
      text-align: center;
    }

    .btn-findmore:hover {
      background-color: #F0D97B;
      color: #000;
    }

    .btn-findmore2 {
      background-color: transparent;
      color: #B8141E;
      border: 2px solid #B8141E;
      border-radius: 8px;
      font-size: 15px;
      padding: 10px 20px; /* cukup, tidak perlu terlalu besar */
      font-weight: bold;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      width: auto; /* pastikan lebarnya menyesuaikan isi */
      max-width: 200px; /* optional, jika ingin batas maksimal */
      text-align: center;
    }

    .btn-findmore2:hover {
      background-color: #B8141E;
      color: #ffffff;
    }



    <style>
    .img-slide {
      position: absolute;
      top: 0;
      left: 0;
      transition: opacity 5s ease-in-out;
      width: 80%;
      height: 80%;
      object-fit: contain;
      transition: opacity 1s ease-in-out;
      opacity: 0;
      z-index: 0;
    }
    .img-slide.active {
      opacity: 1;
      z-index: 1;
    }
    #slider {
      width: 70%;
      max-width: 600px;
      height: 400px;
      position: relative;
      overflow: hidden;
    }
    .welcome-container {
      padding-top: 80px; /* bisa kamu ubah sesuka hati, misal 100px, 150px */
    }
    .play-button {
      width: 100px;
      height: 100px;
      background: #B8141E;
      border: 2px solid #B8141E;
      border-radius: 50%;
      backdrop-filter: blur(8px);
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      transition: all 0.4s ease;
      box-shadow: 0 0 20px #B8141E;
      animation: pulse 2s infinite;
    }

    .play-button i {
      font-size: 50px;
      color: #ffffff;
      transition: all 0.3s ease;
    }

    .play-button:hover {
      background: rgba(255, 255, 255, 0.5);
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.8), 0 0 40px rgba(184, 20, 30, 0.5);
      transform: scale(1.05);
    }

    .play-button:hover i {
      color: #8d0f16;
      
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(184, 20, 30, 0.5);
      }
      70% {
        box-shadow: 0 0 0 20px rgba(184, 20, 30, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(184, 20, 30, 0);
      }
    }
    .delegate-container {
      position: relative;
      overflow: hidden;
    }

    .delegates-wrapper {
      display: flex;
      transition: transform 0.5s ease;
    }

    .delegate-item {
      flex-shrink: 0;
      width: 220px;
      margin: 0 15px; /* Lebih konsisten daripada mx-3 */
      text-align: center;
    }

    .delegate-item img {
      width: 220px;
      height: 220px;
      object-fit: cover;
      border-radius: 12px;
    }

    .delegate-item p {
      margin-top: 10px;
      font-weight: bold;
      font-size: 16px;
    }

    .arrow-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: white;
      border: none;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      cursor: pointer;
      z-index: 10;
    }

    .arrow-btn.left {
      left: 10px;
    }

    .arrow-btn.right {
      right: 10px;
    }

    .arrow-btn i {
      font-size: 24px;
      color: #B8141E;
    }
    .archive-section {
      padding: 40px 0;
      text-align: justify;
    }
    .section-title {
      color: #991B1B; /* merah tua */
      font-weight: bold;
      margin-bottom: 40px;
      font-size: 28px;
    }

    .content-box {
      background-color: rgb(255, 252, 231); /* krem muda */
      border: 2px solid #B8141E;
      border-radius: 150px 50px 150px 50px;
      padding: 40px;
      max-width: 1200px;
      margin: 0 auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* Tambahan ini */
    }


    .image-container {
      width: 100%;
      max-width: 400px;
      height: 300px;
      overflow: hidden;
      border-radius: 60px; /* Lebih bulat */
    }


    .responsive-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content-text {
      color: #991B1B;
      text-align: justify;
      font-size: 16px;
      margin-top: 20px;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
      }
      .image-container {
        margin-bottom: 20px;
      }
    }
    .map-frame {
      width: 100%;
      height: 250px;
      border: 0;
      border-radius: 1rem; /* Rounded corner seperti Bootstrap rounded */
    }
    .info-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 2px oklab(lightness a b);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .info-card .icon {
      font-size: 2.5rem;
      color: #B8141E;
    }

    .info-card .label {
      margin-top: 10px;
      font-weight: 600;
      font-size: 1.1rem;
    }

    @media (max-width: 576px) {
      .info-card .icon {
        font-size: 2rem;
      }
    }         
    .arc-section {
      padding-top: 70px;
    }
    body {
      background-image: url('{{ asset('images/pattern/BGSIPA.png') }}');
      background-repeat: repeat;
      background-size: auto;
      background-color: white;
    }
  
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/sipalogo.png') }}" alt="SIPA Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active fw-bold" href="/">HOME</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/lineup">LINE UP</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/aboutus">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/faq">FAQ</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/admin/login">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="text-justify py-5 header-section">
  <img src="{{ asset('images/pattern/org.png') }}" alt="Background" class="bg">
  <div class="container">
    <img src="{{ asset('images/pattern/sipa2025ku.png') }}" alt="SIPA Logo" class="text" style="max-height: 450px;">
    <p class="fw-bold mb-2">4 · 5 · 6 SEPTEMBER 2025</p>
    <a href="#welcome-section" class="btn btn-findmore mt-4 fw-bold">FIND MORE</a>
  </div>
</section>



<!-- SIPA Experience -->
<section class="py-5 welcome-section" id="welcome-section">
  <div class="container welcome-container" id="welcome-section">
      <h3 class="text-center fw-bold" style="color: #B8141E;">WELCOME TO SIPA!</h3>
      <h3 class="text-center fw-bold" style="color: #B8141E;">PERFORMING ROYAL GENESIS</h3>
      <h4 class="text-center fw-medium mb-5" style="color: #B8141E;">Let’s make new journey on SIPA</h4>

      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h4 class="fw-bold mb-3" style="color: #B8141E;">Who We Are?</h4>
            <p style="text-align: justify;">
                    Solo International Performing Arts (SIPA) 2025 merupakan ajang tahunan yang merayakan keindahan seni pertunjukan dari berbagai belahan dunia. Digelar di Kota Solo, SIPA 2025 menyuguhkan beragam pertunjukan menarik, mulai dari tarian tradisional hingga pertunjukan kontemporer yang inovatif. 
                    Dengan mengangkat tema <strong><em>"Performing Royal Genesis"</em></strong> dan menjadikan Gusti Sura sebagai maskot, SIPA 2025 berhasil menyoroti kekayaan budaya Jawa sekaligus menghadirkan nuansa modern.
            </p>
          <a href="/aboutus" class="btn btn-findmore2 mt-4 px-4 py-2 fw-bold">FIND OUT MORE</a>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <div id="slider" class="position-relative overflow-hidden rounded" style="max-width: 90%;">
            <img src="{{ asset('images/w.slide 1.png') }}" class="img-slide img-fluid w-100 d-block" alt="Slide 1">
            <img src="{{ asset('images/w.slide 2.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 2">
            <img src="{{ asset('images/w.slide 3.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 3">
            <img src="{{ asset('images/w.slide 4.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 4">
            <img src="{{ asset('images/w.slide 5.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 5">
          </div>
        </div>
      </div>


    <div class="text-center mb-5">
      <h3 class="fw-bold" style="color: #B8141E;">ON SIPA LAST YEAR</h3>
      <div class="position-relative d-inline-block mt-4" style="cursor: pointer; max-width: 2560px;">
        <div id="thumbnail" onclick="openVideo()" style="position: relative;">
          <img src="{{ asset('images/Teaser2024.png') }}" class="img-fluid rounded-5" alt="On SIPA Last Year">
          <div class="play-button position-absolute top-50 start-50 translate-middle">
            <span class="circle"></span>
            <i class="bi bi-play-fill"></i>
          </div>
        </div>
        <iframe id="videoIframe" width="1280" height="720"
                src="https://www.youtube.com/embed/rJtSeMMQY9g"
                title="YouTube video" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen
                class="rounded-5" style="display: none;"></iframe>
      </div>
    </div>

    <div class="arc-section mb-5 text-center">
      <h3 class="fw-bold" style="color: #B8141E;">DELEGATES</h3>
    </div>

    <div class="delegates-section text-center my-5">
      
      <div class="delegate-container position-relative" style="overflow: hidden;">
        <div id="delegatesContainer" class="delegates-wrapper">
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Denmark</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">France</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Germany</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
          <div class="delegate-item text-center flex-shrink-0 mx-3">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="Delegate" class="img-fluid rounded-4" style="width: 220px; height: 220px; object-fit: cover;">
            <p class="mt-2 fw-bold" style="font-size: 16px;">Japan</p>
          </div>
        </div>
        <button class="arrow-btn left" onclick="scrollLeft()">
          <i class="bi bi-chevron-left"></i>
        </button>

        <button class="arrow-btn right" onclick="scrollRight()">
          <i class="bi bi-chevron-right"></i>
        </button>
        
      </div>
    </div>

    <div class="mb-5 text-center">
      <h3 class="fw-bold" style="color: #B8141E;">ARCHIVE OF SIPA</h3>
    </div>

    <section class="archive-section">
      <div class="content-box">
        <div class="row align-items-center">
          <div class="col-md-6 d-flex justify-content-center">
            <div class="image-container">
              <img src="{{ asset('images/delegates/delegates 1.png') }}" alt="SIPA Performance" class="responsive-image">
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="text-justify fw-bold" style="color: #B8141E;">Director’s Profile</h3>
              <p class="content-text">
              Irawati Kusumorasri, born in Solo in 1963, directs Solo International Performing Arts (SIPA), a prestigious festival since 2009 that showcases arts from Indonesia and abroad. She’s also a renowned traditional dancer, representing Indonesia globally in cultural missions.
              <br>
              <br>
              Irawati’s achievements include awards from the Ministry of Tourism, the Top 30 Event Calendar accolade, and the first prize from ABBI in 2020. She studied at Sebelas Maret University and ISI Surakarta, excelling in choreographies like “Oncot Srimpi Topeng Sumunar” and founded Semarak Candrakirana Art Center . . .
              </p>
            <a href="#" class="btn btn-findmore2 mt-4 px-4 py-2 fw-bold">UNCOVER MORE</a>
          </div>
        </div>
      </div>
    </section>


    <!-- <div class="row mb-5 align-items-center">
      <div class="col-md-6">
        <h5 class="text-danger fw-bold">CULTURAL ESCAPE</h5>
        <p>Nikmati kekayaan budaya lokal melalui program jalan kaki tematik yang membawa pengunjung menjelajahi situs sejarah dan seni tradisional sekitar.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Cultural Escape">
      </div>
    </div> -->

    <div class="arc-section mb-5 text-center">
      <h3 class="fw-bold" style="color: #B8141E;">NEWS SIPA</h3>
      <h5 class="text-center fw-medium mb-5" style="color: #B8141E;">Update news about SIPA</h5>
    </div>

    <div class="row mb-5">
      <!-- Berita 1 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="position-relative">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" class="card-img-top rounded-top" alt="Launching Poster">
            <span class="badge bg-success position-absolute top-0 end-0 m-2">Event</span>
          </div>
          <div class="card-body">
            <small class="text-muted d-block mb-2">Senin, 22 Juli 2024 02:38 WIB</small>
            <h6 class="fw-bold">
              Launching Poster dan Tema Wayang Jogja Night Carnival #9
            </h6>
            <a href="#" class="text-primary mt-3" style="font-weight: 500; text-decoration: none;">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="position-relative">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" class="card-img-top rounded-top" alt="Launching Poster">
            <span class="badge bg-success position-absolute top-0 end-0 m-2">Event</span>
          </div>
          <div class="card-body">
            <small class="text-muted d-block mb-2">Senin, 22 Juli 2024 02:38 WIB</small>
            <h6 class="fw-bold">
              Launching Poster dan Tema Wayang Jogja Night Carnival #9
            </h6>
            <a href="#" class="text-primary mt-3" style="font-weight: 500; text-decoration: none;">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="position-relative">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" class="card-img-top rounded-top" alt="Launching Poster">
            <span class="badge bg-success position-absolute top-0 end-0 m-2">Event</span>
          </div>
          <div class="card-body">
            <small class="text-muted d-block mb-2">Senin, 22 Juli 2024 02:38 WIB</small>
            <h6 class="fw-bold">
              Launching Poster dan Tema Wayang Jogja Night Carnival #9
            </h6>
            <a href="#" class="text-primary mt-3" style="font-weight: 500; text-decoration: none;">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 4 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="position-relative">
            <img src="{{ asset('images/delegates/delegates 1.png') }}" class="card-img-top rounded-top" alt="Launching Poster">
            <span class="badge bg-success position-absolute top-0 end-0 m-2">Event</span>
          </div>
          <div class="card-body">
            <small class="text-muted d-block mb-2">Senin, 22 Juli 2024 02:38 WIB</small>
            <h6 class="fw-bold">
              Launching Poster dan Tema Wayang Jogja Night Carnival #9
            </h6>
            <a href="#" class="text-primary mt-3" style="font-weight: 500; text-decoration: none;">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <!-- Section Title -->
    <div class="text-center mb-4">
      <h5 class="text-danger fw-bold">We’d love to hear from you</h5>
      <h5 class="fw-bold">@SIPAFESTIVAL</h5>
    </div>

    <!-- Location and Map -->
    <div class="row mb-5 align-items-center">
      <div class="col-md-6">
        <h6 class="text-danger fw-bold">LOCATION</h6>
        <p class="fw-bold">Address</p>
        <p>Jl. Kedasih No.22, <br>Kerten, Laweyan, Solo, Central Java, INA</p>
      </div>
      <div class="col-md-6">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.036946214386!2d110.8030478153319!3d-7.556823776742838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16928e142857%3A0x26507e3dc48d8705!2sJl.%20Kedasih%20No.22%2C%20Kerten%2C%20Laweyan%2C%20Surakarta%20City%2C%20Central%20Java%2057122%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1714294488071!5m2!1sen!2sid" 
          class="map-frame" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

    <hr>

    <!-- Feedback and Volunteer Form -->
    <div class="row mt-5">
      <div class="col-md-6 mb-4 mb-md-0">
        <p>We value your feedback. Whether you have a question or a suggestion, we’re here for you 24/7. Feel free to call or email us anytime.</p>
        <h6 class="text-danger fw-bold">Contact information</h6>
        <p>000888-5556-7856<br>@sipafestival@gmail.com</p>
        <p class="fw-bold">Address</p>
        <p>Jl. Kedasih No.22,<br>Kerten, Laweyan, Solo, Central Java, INA</p>
      </div>

      <div class="col-md-6">
        <div class="p-4 rounded border shadow-sm">
          <h6 class="text-danger fw-bold text-center mb-4">SUBMISSION VOLUNTEER FORM</h6>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control border-danger" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control border-danger" placeholder="Name">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control border-danger" placeholder="Subject">
            </div>
            <div class="mb-3">
              <textarea class="form-control border-danger" rows="4" placeholder="Message"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-danger btn-sm px-4 rounded-pill">SEND THE FORM</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Festival Info -->
<section>
  <div class="container text-center">
    <div class="row g-4">
      <div class="col-sm-6 col-md-4">
        <a href="/" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-house"></i></div>
            <div class="label">HOME</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="/lineup" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-music"></i></div>
            <div class="label">LINE UP</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="/aboutus" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-users"></i></div>
            <div class="label">ABOUT US</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="/faq" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-question-circle"></i></div>
            <div class="label">FAQ</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="/login" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-lock"></i></div>
            <div class="label">ADMIN</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="/ticket" class="text-decoration-none text-dark">
          <div class="card info-card p-4 bg-white rounded">
            <div class="icon"><i class="fas fa-ticket-alt"></i></div>
            <div class="label">TICKET</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer style="background: linear-gradient(to bottom,rgb(255, 255, 255), #f8d98d); font-family: 'Arial', sans-serif; color: #b21e22; padding: 60px 20px 40px;">
  <div class="container">

    <!-- Tiga Kolom: Kiri - Tengah - Kanan -->
    <div class="row text-center text-md-start align-items-center">

      <!-- Kiri: Logo dan Deskripsi -->
      <div class="col-md-4 mb-4 mb-md-0">
        <img src="{{ asset('images/sipalogo.png') }}" alt="SIPA Logo" style="max-height: 90px;">
      </div>

      <!-- Tengah: Sosial Media -->
      <div class="col-md-4 mb-4 mb-md-0 text-center">
        <div style="font-weight: bold; color: black; font-size: 16px;">Follow Us</div>
        <div class="d-flex justify-content-center gap-4 mt-2">
          <a href="#" style="background-color: #b21e22; color: white; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" style="background-color: #b21e22; color: white; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
            <i class="bi bi-twitter"></i>
          </a>
        </div>
      </div>

      <!-- Kanan: Site by dan copyright -->
      <div class="col-md-4 text-md-end text-center mt-4 mt-md-0">
        <small style="color: #b21e22;">SITE BY</small><br>
        <button class="btn btn-outline-danger btn-sm rounded-pill mt-1 mb-2" style="font-weight: bold; border-color: #b21e22; color: #b21e22;">SIPA COMMUNITY</button>
        <div style="font-size: 13px;">&copy; 2025 SIPA COMMUNITY GROUP</div>
      </div>
    </div>
  </div>
</footer>

<script>
  const slides = document.querySelectorAll('.img-slide');
  let index = 0;

  setInterval(() => {
    slides[index].classList.add('d-none'); // Sembunyikan gambar sekarang
    index = (index + 1) % slides.length;
    slides[index].classList.remove('d-none'); // Tampilkan gambar berikutnya
  }, 3000);

  function openVideo() {
  const thumbnail = document.getElementById('thumbnail');
  const iframe = document.getElementById('videoIframe');
  const youtubeLink = "https://www.youtube.com/embed/rJtSeMMQY9g?autoplay=1"; // Autoplay enabled

  thumbnail.style.display = 'none';
  iframe.src = youtubeLink;
  iframe.style.display = 'block';
}
  let currentPosition = 0;
  const container = document.getElementById('delegatesContainer');
  const containerWrapper = container.parentElement;
  const itemWidth = 250; // 220 + 2*15px margin

  function scrollLeft() {
    const maxScroll = 0;

    currentPosition += itemWidth;
    if (currentPosition > maxScroll) {
      currentPosition = maxScroll;
    }

    container.style.transform = `translateX(${currentPosition}px)`;
  }

  function scrollRight() {
    const containerWidth = container.scrollWidth;
    const wrapperWidth = containerWrapper.offsetWidth;
    const maxScroll = wrapperWidth - containerWidth;

    currentPosition -= itemWidth;
    if (currentPosition < maxScroll) {
      currentPosition = maxScroll;
    }

    container.style.transform = `translateX(${currentPosition}px)`;
  }

  // AUTO SCROLL tiap 3 detik
  setInterval(() => {
    const containerWidth = container.scrollWidth;
    const wrapperWidth = containerWrapper.offsetWidth;
    const maxScroll = wrapperWidth - containerWidth;

    currentPosition -= itemWidth;
    if (currentPosition < maxScroll) {
      currentPosition = 0; // kalau sudah mentok kanan, reset ke awal
    }

    container.style.transform = `translateX(${currentPosition}px)`;
  }, 3000); // 3000 ms = 3 detik

</script>
</body>
</html>
