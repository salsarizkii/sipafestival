<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 10px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .btn-custom {
            background-color: #4F1C51;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #3e1540;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .login-container {
                margin: 50px auto;
                padding: 15px;
            }
        }
        @media (max-width: 576px) {
            .login-container {
                margin: 20px auto;
                padding: 10px;
                max-width: 90%;
            }
        }
        .logo-small {
            width: 100px; 
            margin-top: 100px;
        }

    </style>
</head>
<body>
    <div class="container">
        
        <div class="logo-container text-center mt-7">
            <img src="/images/logosipafestival2025.png" alt="Logo SIPA Festival 2025" class="img-fluid logo-small mt-5 mb-0.5">
        </div>        
        <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            <form action="{{route('loginbaru')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>