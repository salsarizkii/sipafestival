<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIPA Dashboard</title>

    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
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

        .hover-underline:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
            </li>
        </ul>
    </header>


    <div class="d-flex align-items-start">
        @include('admin.component.sidebar')
        
        <div class="content flex-grow-1">
            <h1 class="m-5 text-5xl text-black fw-bold">Hi, Helmi Rafik!</h1>

            <!-- Main Content -->
            @yield('content')
        </div>

    </div>

    

    <!-- Sidebar link active script -->
    <script>
        const navLinks = document.querySelectorAll('.nav-pills .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => {
                    l.classList.remove('active', 'bg-white', 'shadow-sm', 'text-dark',
                        'fw-semibold');
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
