<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPA Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <style>
        body { 
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
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
                <a href="#" class="nav-link active rounded-4" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true"><use xlink:href="#home"/></svg>
                  Seluruh Aduan
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true"><use xlink:href="#speedometer2"/></svg>
                  Belum dibaca
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true"><use xlink:href="#table"/></svg>
                  Sudah dibaca
                </a>
              </li>
            </ul>
            <p class="nav nav-pills flex-column mb-auto ms-3">Account Page</p>
            <ul class="nav nav-pills flex-column mb-auto ms-3">
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true"><use xlink:href="#grid"/></svg>
                  Log Out
                </a>
            </ul>
          </div>
        <!-- Main Content -->
        <div class="content flex-grow-1">
            <h1 class="m-5 text-5xl text-black fw-bold">Hi, Helmi Rafik!</h1>
            <div class="card m-3 rounded-4 bg-white border-white shadow">
                <div class="card-header d-flex rounded-4 bg-white justify-content-between align-items-center">
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
                            <th scope="col">#</th>
                            <th scope="col-2">Aduan</th>
                            <th scope="col-4">Status</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
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