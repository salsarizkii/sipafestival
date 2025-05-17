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
    * {
      font-family: 'Poppins', sans-serif;
    }
    body {
      background-image: url('{{ asset('images/pattern/BGSIPA.png') }}');
      background-repeat: repeat;
      background-size: auto;
      background-color: white;
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
      border-radius: 40px 130px 40px 130px;
      padding: 40px;
      max-width: 1200px;
      margin: 0 auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* Tambahan ini */
    }
    .image-container {
      width: 500px;
      max-width: 550px;
      height: 500px;
      overflow: hidden;
      border-radius: 20px 100px 20px 100px;
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
      margin-right: 20px;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
      }
      .image-container {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

<x-header title="Selamat Datang" />

<section class="py-5 welcome-section" id="welcome-section">
    <div class="mb-5 text-center">
      <h2 class="fw-bold" style="color: #B8141E;">ARCHIVE OF SIPA</h2>
    </div>

    <section class="archive-section">
      <div class="content-box">
        <div class="row align-items-center">
          <div class="col-md-6 d-flex justify-content-center">
            <div class="image-container">
              <img src="{{ asset('images/bundaira/BundaIRA.png') }}" alt="SIPA Performance" class="responsive-image">
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
          </div>
        </div>
      </div>
    </section>
</section>
<x-footer />
</body>
</html>