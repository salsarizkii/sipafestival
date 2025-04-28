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
    }
    .header-section img.bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
      mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
    }
    
    .header-section .container {
      width: 100%;
      height: 700px;
      padding: 0;
    }
    .header-section .container{
      font-size: 25px;
      color: #B8141E; 
    }
    .header-section img.text {
      width: 100%;
      height: 100%;
      top: 50px;
      left: 0;
      position:relative;
    }
    .btn-findmore {
      background-color: transparent; /* transparan */
      color: #B8141E; /* warna teks merah, bisa disesuaikan */
      border: 2px solid #B8141E; /* garis pinggir merah */
      border-radius: 8px; /* sudut membulat */
      font-size: 15px;
      padding: 12px 24px;
      font-weight: bold;
      transition: all 0.3s ease;
      text-decoration: none; /* hapus underline */
      display: inline-block;
    }
    .btn-findmore:hover {
      background-color: #B8141E; /* saat hover, background jadi merah */
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
    .delegates-wrapper {
      overflow-x: auto;
      scroll-behavior: smooth;
      padding: 10px;
      white-space: nowrap;
    }

    .delegate-item {
      width: 220px; /* Lebar 1 item */
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
      left: 5px;
    }

    .arrow-btn.right {
      right: 5px;
    }

    .arrow-btn i {
      font-size: 24px;
      color: #B8141E;
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
<section class="text-center py-5 header-section">
  <img src="{{ asset('images/pattern/pattern12.png') }}" alt="Background" class="bg">
  <div class="container">
    <img src="{{ asset('images/pattern/sipa2025.png') }}" alt="SIPA Logo" class="text" style="max-height: 450px;">
    <p class="fw-bold mb-2">4 · 5 · 6 SEPTEMBER 2025</p>
    <a href="#welcome-section" class="btn btn-findmore mt-4 px-4 py-2 fw-bold">FIND MORE</a>
  </div>
</section>



<!-- SIPA Experience -->
<section class="py-5 welcome-section" id="welcome-section">
  <div class="container welcome-container" id="welcome-section">
    <h3 class="text-center fw-bold" style="color: #B8141E;">WELCOME TO SIPA!</h3>
    <h3 class="text-center fw-bold" style="color: #B8141E;">PERFORMING ROYAL GENESIS</h3>
    <h4 class="text-center fw-medium mb-5" style="color: #B8141E;">Let’s make new journey on SIPA</h4>

    <div class="row mb-5 align-items-justify">
      <div class="col-md-6">
        <h4 class="fw-bold mb-3" style="color: #B8141E;">Who We Are?</h4>
          <p style="text-align: justify;">
            Solo International Performing Arts (SIPA) 2025 merupakan ajang tahunan yang merayakan keindahan seni pertunjukan dari berbagai belahan dunia. Digelar di Kota Solo, SIPA 2025 menyuguhkan beragam pertunjukan menarik, mulai dari tarian tradisional hingga pertunjukan kontemporer yang inovatif. 
            Dengan mengangkat tema <strong><em>"Performing Royal Genesis"</em></strong> dan menjadikan Gusti Sura sebagai maskot, SIPA 2025 berhasil menyoroti kekayaan budaya Jawa sekaligus menghadirkan nuansa modern.
          </p>
        <a href="/aboutus" class="btn btn-findmore mt-4 px-4 py-2 fw-bold">FIND OUT MORE</a>
      </div>
      <div class="col-md-6" style="content-align: center;">
        <div id="slider" class="position-relative overflow-hidden rounded">
          <img src="{{ asset('images/w.slide 1.png') }}" class="img-slide img-fluid w-100 d-block" alt="Slide 1">
          <img src="{{ asset('images/w.slide 2.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 2">
          <img src="{{ asset('images/w.slide 3.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 3">
          <img src="{{ asset('images/w.slide 4.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 4">
          <img src="{{ asset('images/w.slide 5.png') }}" class="img-slide img-fluid w-100 d-none" alt="Slide 5">
        </div>
      </div>
    </div>

    <div class="text-center mb-5">
      <h3 class="fw-bold" style="color: #B8141E;">On SIPA Last Year</h3>

      <div class="position-relative d-inline-block mt-4" style="cursor: pointer; max-width: 2560px;">
        <div id="thumbnail" onclick="openVideo()" style="position: relative;">
          <img src="{{ asset('images/Teaser2024.png') }}" class="img-fluid rounded-4" alt="On SIPA Last Year">

          <div class="play-button position-absolute top-50 start-50 translate-middle">
            <span class="circle"></span>
            <i class="bi bi-play-fill"></i>
          </div>
        </div>

        <iframe id="videoIframe" width="1280" height="720"
                src="https://www.youtube.com/embed/rJtSeMMQY9g"
                title="YouTube video" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen
                class="rounded-4" style="display: none;"></iframe>
      </div>
    </div>

    <div class="delegates-section text-center my-5">
      <h3 class="fw-bold" style="color: #B8141E;">Delegates</h3>

      <div class="position-relative" style="position: relative; overflow: hidden;">

        <div id="delegatesContainer" class="delegates-wrapper d-flex">
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

        <button class="arrow-btn right" onclick="scrollRight()">
          <i class="bi bi-chevron-right"></i>
        </button>
        <button class="arrow-btn left" onclick="scrollLeft()">
          <i class="bi bi-chevron-left"></i>
        </button>
      </div>
    </div>




    <div class="row mb-5 align-items-center flex-md-row-reverse">
      <div class="col-md-6">
        <h5 class="text-danger fw-bold">SUSTAINABILITY PROGRAM</h5>
        <p>Sipafestival menekankan keberlanjutan lingkungan dengan sistem manajemen sampah yang baik agar limbah dikelola secara bertanggung jawab.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Sustainability Program">
      </div>
    </div>

    <div class="row mb-5 align-items-center">
      <div class="col-md-6">
        <h5 class="text-danger fw-bold">CULTURAL ESCAPE</h5>
        <p>Nikmati kekayaan budaya lokal melalui program jalan kaki tematik yang membawa pengunjung menjelajahi situs sejarah dan seni tradisional sekitar.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Cultural Escape">
      </div>
    </div>

    <div class="row mb-5 align-items-center flex-md-row-reverse">
      <div class="col-md-6">
        <h5 class="text-danger fw-bold">PASARAYA SIPA</h5>
        <p>Marketplace kurasi dengan ragam kuliner dan produk kreatif lokal yang memperkaya pengalaman festival secara keseluruhan.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Pasaraya SIPA">
      </div>
    </div>

    <div class="mb-5 text-center">
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
</section>

<!-- Festival Info -->
<section class="">
  <div class="container text-center">
    <h4 class="text-danger fw-bold mb-4">FESTIVAL INFO</h4>
    <div class="row g-3">
      <div class="col-md-4"><div class="border p-3 rounded bg-white">🛈<br>GENERAL INFO</div></div>
      <div class="col-md-4"><div class="border p-3 rounded bg-white">📄<br>TERM & CONDITIONS</div></div>
      <div class="col-md-4"><div class="border p-3 rounded bg-white">✋<br>DO & DON'TS</div></div>
      <div class="col-md-4"><div class="border p-3 rounded bg-white">🚌<br>TRANSPORTATION</div></div>
      <div class="col-md-4"><div class="border p-3 rounded bg-white">❓<br>FAQ</div></div>
      <div class="col-md-4"><div class="border p-3 rounded bg-white">🏕️<br>FACILITIES</div></div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer style="background: linear-gradient(to bottom,rgb(255, 255, 255), #f8d98d); font-family: 'Arial', sans-serif; color: #b21e22; padding: 60px 20px 40px;">
  <div class="container">

    <!-- Navigasi Menu (tengah atas) -->
    <nav class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="font-size: 14px; font-weight: bold;">
      <a href="#" style="color: #b21e22; text-decoration: none;">HOME</a>
      <a href="#" style="color: #b21e22; text-decoration: none;">LINEUP</a>
      <a href="#" style="color: #b21e22; text-decoration: none;">NEWS</a>
      <a href="#" style="color: #b21e22; text-decoration: none;">ABOUT US</a>
      <a href="#" style="color: #b21e22; text-decoration: none;">FAQ</a>
    </nav>

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
  function scrollLeft() {
    const container = document.getElementById('delegatesContainer');
    container.scrollBy({
      left: -250, // geser ke kiri sekitar 1 gambar
      behavior: 'smooth'
    });
  }

  function scrollRight() {
    const container = document.getElementById('delegatesContainer');
    container.scrollBy({
      left: 250, // geser ke kanan sekitar 1 gambar
      behavior: 'smooth'
    });
  }
</script>
</body>
</html>
