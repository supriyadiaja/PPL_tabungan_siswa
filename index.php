<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabungan Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <style>
    body {
        font-family: 'poppins', sans-serif;
    }

    h2 {
        color: #138A5F;
        font-size: 60px;
        font-weight: 400;
    }

    p {
        color: #22B35A;
    }

    .btn {
        background-color: #8DCBE6;
        border: none;
        font-size: 15px;
        width: 100px;
    }

    ion-icon {
        font-size: 24px;
        position: absolute;
        top: 5px;
        right: 9px;
    }

    span {
        color: #5F8D4E;
        font-size: 65px;
        font-weight: bold;
    }

    .hero img {
        animation: pulse 2s infinite; /* nama animasi, durasi, dan jumlah pengulangan */
    }


    @keyframes pulse {
  
        0% {
            transform: scale(1.2); 
        }
        50% {
            transform: scale(1.3); 
        }
        100% {
            transform: scale(1.2); 
        }
    }

  </style>
    
    <!-- Hero -->
    <section class="hero" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-6" style="margin-top: 170px;">
                    <h2>"Menabung dengan <span>Smart</span>"</h2>
                    <p>Cara Memanfaatkan Teknologi untuk Mengoptimalkan Keuangan.</p>
                    <a class="btn btn-primary position-relative pe-5" type="submite" href="login.php">Masuk <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
                <div class="col-2 m-auto mb-0">
                    <img src="images/heroMany.jpg" alt="heros">
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
