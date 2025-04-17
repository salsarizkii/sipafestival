<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPA Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <style>
        body { 
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }
        .bg-purple-sipa{
            background-color: #4F1C51;
        }
        .border-icon{
            border-radius: 35%;
        }
        .content .search-bar {
            position: relative;
        }
        .content .search-bar input {
            border-radius: 20px;
            padding-right: 40px;
        }
        .content .search-bar .fa-search {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary m-3" style="width: 280px;">
            <a href="/" class="justify-content-center">
              <img src="/images/logosipafestival2025.png" alt="sipafestival2025" width="100" height="75" class="mx-5">
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto ms-3">
              <li class="nav-item">
                <a href="#" class="align-items-center d-flex nav-link active rounded-4" aria-current="page">
                    <div class="border-icon p-2 bg-purple-sipa text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z"/>
                          </svg>             
                    </div>
                  <span class="ms-2">
                    Seluruh Aduan
                  </span>
                </a>
              </li>
              <li>
                <a href="#" class="align-items-center d-flex nav-link link-body-emphasis">
                    <div class="border-icon p-2 bg-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #4F1C51;" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                          </svg>
                          
                    </div>
                    <span class="ms-2">
                        Belum dibaca
                    </span>
                </a>
              </li>
              <li>
                <a href="#" class="align-items-center d-flex nav-link link-body-emphasis">
                    <div class="border-icon p-2 bg-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #4F1C51;" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 0 0 0 0s0 0 0 0s0 0 0 0c0 0 0 0 0 0l.3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/>
                        </svg>
                    </div>
                    <span class="ms-2">Sudah dibaca</span>
                </a>
              </li>
            </ul>
            <p class="nav nav-pills flex-column mb-auto ms-3">Account Page</p>
            <ul class="nav nav-pills flex-column mb-auto ms-3">
                <a href="#" class="align-items-center d-flex nav-link link-body-emphasis">
                    <div class="border-icon p-2 bg-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #4F1C51;" width="16" height="16" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free -->
                            <path fill="currentColor" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>                      
                    </div>
                  <span class="ms-2">
                      Log Out
                  </span>
                </a>
            </ul>
          </div>

        {{-- sidebar for mobile --}}
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel" style="width: 280px;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="sidebarLabel">Sidebar</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column p-3">
              <!-- Your original sidebar content below -->
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Sidebar</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <!-- nav items -->
              </ul>
              <hr>
              <div class="dropdown">
                <!-- dropdown user -->
              </div>
            </div>
          </div>
        <!-- Main Content -->
        <div class="content flex-grow-1">
            <h1 class="m-5 text-5xl text-black" style="font-weight : 700;">Hi, Helmi Rafik!</h1>
            <div class="card m-3 rounded-4 bg-white border-white shadow">
                <div class="card-header d-flex rounded-4 bg-white border-white justify-content-between align-items-center">
                    <span>DAFTAR ADUAN</span>
                    <form class="d-flex rounded-4" role="search">
                        <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success rounded-5" type="submit">Search</button>
                      </form>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">No</th>
                            <th scope="col" width="70%" class="text-left">Judul Aduan</th>
                            <th scope="col" width="20%">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>