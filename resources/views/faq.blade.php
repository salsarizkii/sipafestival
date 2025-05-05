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
    .header-section {
      position: relative;
    }
    .header-section img.bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      opacity: 0.4;
    }
    .delegates-img {
      width: 100%;           /* Biar gambar full lebar kolom */
      height: 100%;          /* Tinggi tetap seragam */
      object-fit: cover;      /* Gambar crop rapi tanpa gepeng */
      border-radius: 10px;    /* Biar sudut gambar membulat */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan halus */
      transition: transform 0.3s ease; /* Smooth hover effect */
    }

    .delegates-img:hover {
      transform: scale(1.05); /* Pas hover gambar membesar sedikit */
    }
    .card-body {
      margin-top: 20px; /* jarak antara gambar dan tulisan */
    }

    .card-title {
      font-size: 1rem;
      color: #B8141E;
    }
    .info-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .info-card .icon {
      font-size: 2.5rem;
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
  </style>
</head>
<body>

<x-header title="Selamat Datang" />

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

      <!-- Kanan: Site by dan Copyright -->
      <div class="col-md-4 text-md-end text-center mt-4 mt-md-0">
        <small style="color: #b21e22;">SITE BY</small><br>
        <button class="btn btn-outline-danger btn-sm rounded-pill mt-1 mb-2" style="font-weight: bold; border-color: #b21e22; color: #b21e22;">SIPA COMMUNITY</button>
        <div style="font-size: 13px;">&copy; 2025 SIPA COMMUNITY GROUP</div>
      </div>

    </div>
  </div>
</footer>
</body>
</html>