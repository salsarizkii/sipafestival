<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIPA Dashboard</title>

  <!-- Bootstrap & Font -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Custom Style -->
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f9fa;
    }
    .bg-purple-sipa {
      background-color: #4F1C51;
    }
    .border-icon {
      border-radius: 35%;
    }
  </style>
</head>

<body>
  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
      </li>
    </ul>
  </header>


  <div class="d-flex align-items-start">
    
    {{-- <!-- Toggle button for mobile -->
    <button class="btn d-md-none m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
      ☰
    </button> --}}


    <!-- Sidebar -->
    <div class="offcanvas-md offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;" id="sidebarMenu" tabindex="-1" aria-labelledby="mobileSidebarLabel">
      
      <!-- Offcanvas Header (Mobile Only) -->
      <div class="offcanvas-header d-md-none">
        <h5 class="offcanvas-title" id="mobileSidebarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <!-- Logo -->
      <a href="/" class="justify-content-center d-md-block">
        <img src="/images/logosipafestival2025.png" alt="sipafestival2025" width="100" height="75" class="mx-5" />
      </a>
      <hr />

      <!-- Menu Items -->
      <ul class="nav nav-pills flex-column ms-3">
        <li class="nav-item">
          <a href="#" class="d-flex align-items-center nav-link rounded-4 bg-white shadow-sm px-3 py-2 active link-body-emphasis">
            <div class="border-icon p-2 bg-purple-sipa text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 384 512" fill="currentColor">
                <path d="M0 64C0 28.7 28.7 0 64 0L224 0v128c0 17.7 14.3 32 32 32h128v288c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64h-128V0l128 128z"/>
              </svg>
            </div>
            <span class="ms-2 text-dark">Seluruh Aduan</span>
          </a>
        </li>
        <li>
          <a href="#" class="d-flex align-items-center nav-link link-body-emphasis">
            <div class="border-icon p-2 bg-white shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" fill="currentColor" style="color: #4F1C51;">
                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48H48zM0 176v208c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
              </svg>
            </div>
            <span class="ms-2">Belum dibaca</span>
          </a>
        </li>
        <li>
          <a href="#" class="d-flex align-items-center nav-link link-body-emphasis">
            <div class="border-icon p-2 bg-white shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" fill="currentColor" style="color: #4F1C51;">
                <path d="M512 240c0 114.9-114.6 208-256 208-37.1 0-72.3-6.4-104.1-17.9-11.9 8.7-31.3 20.6-54.3 30.6-45.9 20.3-74.8 29.2-103.5 29.2-6.5 0-12.3-3.9-14.8-9.9-2.5-6-1.1-12.8 3.4-17.4 1.1-1.2 2.8-3.1 4.9-5.7 4.1-5 9.6-12.4 15.2-21.6 10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240 0 125.1 114.6 32 256 32s256 93.1 256 208z"/>
              </svg>
            </div>
            <span class="ms-2">Sudah dibaca</span>
          </a>
        </li>
      </ul>

      <!-- Account Section -->
      <p class="nav nav-pills flex-column ms-3">Account Page</p>
      <ul class="nav nav-pills flex-column mb-auto ms-3">
        <a href="#" class="d-flex align-items-center nav-link link-body-emphasis">
          <div class="border-icon p-2 bg-white shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" style="color: #4F1C51;" width="16" height="16" viewBox="0 0 512 512" fill="currentColor">
              <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9-18.7 0-33.9-15.2-33.9-33.9v-62.1h-128c-17.7 0-32-14.3-32-32v-64c0-17.7 14.3-32 32-32h128v-62.1c0-18.7 15.2-33.9 33.9-33.9 9 0 17.6 3.6 24 9.9zM160 96H96c-17.7 0-32 14.3-32 32v256c0 17.7 14.3 32 32 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-53 0-96-43-96-96V128C0 75 43 32 96 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
            </svg>
          </div>
          <span class="ms-2">Log Out</span>
        </a>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="content flex-grow-1">
      <h1 class="m-5 text-5xl text-black fw-bold">Hi, Helmi Rafik!</h1>
      <div class="card m-3 rounded-4 bg-white border-white shadow">
        <div class="card-header d-flex rounded-4 bg-white border-white justify-content-between align-items-center">
          <span>DAFTAR ADUAN</span>
          <form class="d-flex rounded-4" role="search">
            <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success rounded-5" type="submit">Search</button>
          </form>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="10%">No</th>
                <th scope="col" width="70%" class="text-left">Aduan</th>
                <th scope="col" width="20%">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <p><strong>{{ $complaint['name'] }}</strong></p>
                  <p></p>
                </td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar link active script -->
  <script>
    const navLinks = document.querySelectorAll('.nav-pills .nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        navLinks.forEach(l => {
          l.classList.remove('active', 'bg-white', 'shadow-sm', 'text-dark', 'fw-semibold');
          const span = l.querySelector('span');
          if (span) span.classList.remove('text-dark', 'fw-semibold');
        });
        this.classList.add('active', 'bg-white', 'shadow-sm');
        const span = this.querySelector('span');
        if (span) span.classList.add('text-dark', 'fw-semibold');
      });
    });
  </script>

  <!-- Optional JS (for Bootstrap compatibility) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
