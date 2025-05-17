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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    .navbar-brand img {
      max-height: 65px;
    }
    .navbar-custom {
      background: white;
      border-bottom: 3px solid #B8141E;
    }
    .navbar-nav .nav-link {
      font-family: 'Poppins', sans-serif;
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
        <!-- <li class="nav-item"><a class="nav-link fw-bold" href="/">HOME</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/lineup">LINE UP</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/aboutus">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/faq">FAQ</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="/admin/login">Login</a></li> -->

        <a class="nav-link fw-bold {{ request()->is('/') ? 'active' : '' }}" href="/">HOME</a>
        <a class="nav-link fw-bold {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">GALLERY</a>
        <a class="nav-link fw-bold {{ request()->is('lineup') ? 'active' : '' }}" href="/lineup">LINE UP</a>
        <a class="nav-link fw-bold {{ request()->is('aboutus') ? 'active' : '' }}" href="/aboutus">ABOUT US</a>
      </ul>
    </div>
  </div>
</nav>