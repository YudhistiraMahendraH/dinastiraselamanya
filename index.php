<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dragon Story</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/5680/5680123.png?semt=ais_hybrid">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        *{
        font-family: sans-serif;
      }

      html {
            scroll-behavior: smooth;
            scroll-padding-top: 55px; 
      }

      .navbar-toggler {
        border: none;
        font-size: 1.25rem;
      }

      .navbar{
        background-color: #ddf897;
      }

      .navbar-toggler:focus,
      .btn-close:focus {
        box-shadow: none;
        outline: none;
      }

      .nav-link {
        color: #666777;
        font-weight: 500;
        position: relative;
        transition: color 0.3s ease, transform 0.3s ease;
      }

      .nav-link:hover,
      .nav-link.active {
        color: black;
        background-color: #f6fe88;
        border-radius: 10px;
        transform: scale(1.1);
      }

      .nav-item .nav-link.active.dark-mode{
        background-color: #767677;
      }

      @media (min-width: 991px) {
        .nav-link::before {
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 0;
          height: 2px;
          background-color: #292929;
          visibility: hidden;
          transition: 0.3s ease-in-out;
        }

        .nav-link:hover::before {
          width: 100%;
          visibility: visible;
        }
      }
      @media (width < 991px) {
        .nav-link::before {
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 0;
          height: 2px;
          background-color: #292929;
          visibility: hidden;
          transition: 0.3s ease-in-out;
        }

        .nav-link:hover::before {
          width: 100%;
          visibility: visible;
        }

        .nav-link{
          text-align: center;
          margin-top: 2%;
        }

        #theme-toggle{
          margin-top: 2%;
          width: 100%;
        }
      }

      .navbar .container-fluid {
        background-color: #b9f6ff;
        border-radius: 10px;
        padding: 0 3%;
      }

      #hero {
        background-color: #b9f6ff;
        height: auto;
        padding: 70px 0;
      }

      #hero .text{
        padding-left: 5%;
      }

      #hero h1{
        font-size: 60px;
      }

      #hero p{
        font-size: 30px;
      }

      #hero img {
        border-radius: 20px;
        margin: 5% 0;
        max-height: 70vh;
        width: auto; 
        object-fit: cover; 
      }

      @media (max-width: 768px) {
        #hero .text{
          padding-left: 5%;
          padding-top: 3%;
          text-align: center;
        }
        #hero{
          padding-top: 50px;
        }
        #hero h1 {
          font-size: 40px; 
        }

        #hero p {
          font-size: 20px;
        }
        #hero img{
          margin-left: 5%;
        }
      }

      #hero span#merah{
        color: red;
      }

      #hero span#putih{
        color: white;
      }

      #article{
        background-color: #ffffff;
      }

      .card{
        height: 100%;
      }

      .card img{
        height: 30%;
      }

      .card-text{
        text-align: justify;
      }

      .card-footer{
        color: #666777;
        text-align: center;
      }

      #gallery .container-fluid{
        background-color: #C6E2F3;
      }

      footer{
        background-color:  #b9f6ff;
      }

      footer a{
        color: #000000;
      }

      footer p{
        color: #000000;
        font-size: 20px;
        margin: 0;
      }

      i{
        font-size: 35px;
        margin: 5px 10px;
      }

      i:hover {
        color: #666777; 
      }

      .time-container {
        font-size: 18px;
        font-weight: bold;
        color: #292929;
      }

      #tanggal {
        display: block;
      }

      #jam {
        display: block;
        margin-top: 5px; 
      }

      .navbar,
      #article,
      #hero,
      #gallery,
      footer,
      .card {
        transition: background-color 0.3s ease, color 0.3s ease;
      }


      .card.dark-mode {
        background-color: #333; 
        color: #fff; 
        border-color: #888888;
      }

      .card.dark-mode .card-footer {
        background-color: #444;
        color: #fff;
      }


      .card.dark-mode img{
        filter: brightness(0.8);
      }

      .navbar.dark-mode {
        background-color: #1A1A1A;
      }

      .navbar.dark-mode .container-fluid,
      .navbar.dark-mode .container-fluid a {
        background: #4b4b4b;
        color: white;
      } 

      footer.dark-mode,
      footer.dark-mode a,
      footer.dark-mode p {
        background-color: #1A1A1A;
        color: #FFFFFF;
      }

      #hero.dark-mode,
      #hero.dark-mode .time-container {
        background-color: #333;
        color: #FFFFFF;
      }

      #hero.dark-mode img{
        filter: brightness(0.8);  
      }

      #article.dark-mode {
        background-color: #444;
        color: #FFFFFF;
      }

      #gallery.dark-mode,
      #gallery.dark-mode .container-fluid {
        background-color: #222;
        color: #FFFFFF;
      }

      #gallery.dark-mode img {
        filter: brightness(0.7);
      }

      .dark-mode {
        background-color: #333;
        color: white; 
      }

      .nav-link.dark-mode::before {
        background-color: white;
      }      

      .offcanvas.dark-mode{
        background-color: #4b4b4b; 
      }

      .offcanvas.dark-mode .offcanvas-header{
        background-color: #1A1A1A;
      }
      
      .offcanvas.dark-mode .btn-close{
        background-color: #fff;
      }

      .offcanvas .btn-close{
        background-color: red;
      }

      .schedule h1 {
            text-align: center;
            align-content: center;
        }

        .about-me-section .profile-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
    .about-me-section .student-id {
        margin-bottom: 0.5rem;
        font-weight: bold;
    }
    .about-me-section .univ-link {
        color: black;
        text-decoration: none;
    }
    .about-section {
        display: flex;
        align-items: center;
    }

        .dark-mode .card.text-bg-light {
            background-color: #333 !important;
            color: white !important;
            border: 1px solid #444;
        }

        .dark-mode .card.text-bg-light .card-header,
        .dark-mode .card.text-bg-light .list-group-item {
            background-color: #444 !important;
            color: white !important;
        }

        .dark-mode .about-me-section {
            background-color: #333;
            color: white;
        }

        .dark-mode .about-me-section h2,
        .dark-mode .about-me-section p {
            color: white;
        }

        .card-header {
          background-color: red;
        }


    </style>
    <!--nav begin-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Dragon Story</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#schedule">Schedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aboutme">About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" target="_blank">Login</a>
                </li>
                    <li class="nav-item">
                        <button id="theme-toggle" class="btn btn-outline-secondary">🌑</button>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
    <!--nav end-->
    <!--hero begin-->
    <section id="hero" class="text- center p-5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ed615427-7cbf-44ce-9725-34fe84f49000/dd8w9ht-3342dcb6-daf3-4c56-8c85-0dbdd233901c.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2VkNjE1NDI3LTdjYmYtNDRjZS05NzI1LTM0ZmU4NGY0OTAwMFwvZGQ4dzlodC0zMzQyZGNiNi1kYWYzLTRjNTYtOGM4NS0wZGJkZDIzMzkwMWMuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Z5ytfS0qExv1ejp2Dg7-Md0odCfd2BRCXcun11lFvAo" 
                class="img-fluid"
                width="300">
                <div>
                    <h1 class="fw-bold display-4">
                      Kesendirian adalah kata lain dari kesepian ;(
                    </h1>
                    <h4 class="lead display-6">
                      Alone is more comfortable than together without certainity
                    </h4>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div> 
            </div>
        </div>
    </section>
    <!--hero end-->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="images/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!--gallery begin-->
    <section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://imgcdn.stablediffusionweb.com/2024/4/20/1f56e89f-3b54-4490-a3c9-45ac6c2e5b1c.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://img.freepik.com/free-photo/anime-style-mythical-dragon-creature_23-2151112867.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://jio-rockers.com/wp-content/uploads/2024/08/Anime-Wekwakpraui-Wallpaper-1024x574.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://getlivewall.com/wp-content/uploads/2024/09/Silver-Dragon-4K-getlivewall.com-thumbnail.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://moewalls.com/wp-content/uploads/2023/10/samurai-vs-shadow-dragon-thumb-364x205.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    </section>
    <!--gallery end-->
    <!--schedule begin-->
    <!--Schedule begin-->
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-md-4 row-cols-1 g-4 justify-content">
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Senin</div>
            <div class="card-body">
              <h5 class="card-title-center">Basis Data</h5>
              <p class="card-text-center">08.40 - 10.20 | H.5.7</p>
            </div>
            <hr>
            <div class="card-body">
              <h5 class="card-title-center">Sistem Operasi</h5>
              <p class="card-text-center">12.30 - 15.00 | H.4.3 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Selasa</div>
            <div class="card-body">
              <h5 class="card-title-center">Kewarganegaraan</h5>
              <p class="card-text-center">08.40 - 10.20 | Aula Gedung H</p>
            </div>
            <hr>
            <div class="card-body">
              <h5 class="card-title-center">Probabilitas dan Statistika</h5>
              <p class="card-text-center">12.30 - 15.00 | H.4.3 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Rabu</div>
            <div class="card-body">
              <h5 class="card-title-center">Basis Data</h5>
              <p class="card-text-center">08.40 - 10.20 | H.5.7</p>
            </div>
            <hr>
            <div class="card-body">
              <h5 class="card-title-center">Kriptografi</h5>
              <p class="card-text-center">12.30 - 15.00 | H.4.3 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Kamis</div>
            <div class="card-body">
              <h5 class="card-title">Pemrograman Berbasis</h5>
              <p class="card-text-center">08.40 - 10.20 | D.2.J</p>
            </div>
            <hr>
            <div class="card-body">
              <h5 class="card-title">Logika Informatika</h5>
              <p class="card-text-center">12.30 - 15.00 | H.4.3 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Jum'at</div>
            <div class="card-body">
              <h5 class="card-title-center">Rekayasa Perangkat Lunak</h5>
              <p class="card-text-center">09.30 - 12.00 | H.5.7</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header">Sabtu</div>
            <div class="card-body">
              <h5 class="card-title-center">FREE</h5>
        
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!--schedule end-->
    <!--about me begin-->
    <!-- Profil Section -->
<section id="aboutme" class="profil text-center p-5 bg-danger-subtle text-sm-start">
  <div class="d-sm-flex flex-sm-row align-items-center justify-content-center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRY8DQ5_6yeWRDUSkqJOwKmgT_qVRP_STGYcOMxS7gAcsLYxP2R0tBw14ncVCJ8L25c1g&usqp=CAU"
      class="foto img-fluid rounded-circle" width="300" height="300" style="object-fit: cover; border-radius: 50%;">
    <div class="ms-4">
      <div class="ms-4 ">
        <p>A11.2023.14932</p>
        <h1><strong>Yudhistira Mahendra Herianto</strong></h1>
        <p>Program Studi Teknik Informatika</p>
        <p><a href="https://dinus.ac.id" class="link text-dark" style="text-decoration: none;"><strong>Udinus Dian Nuswantoro</strong></a></p>
      </div>
    </div>
  </div>
</section>
    <!--footer begin-->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/y_dhizz/profilecard/?igsh=MW9rY2gzZGh0anJ3cg=="><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://www.tiktok.com/@dhizz_notyourtype?_t=8qxYxj4VraK&_r=1"><i class="bi bi-tiktok h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/qr/N43UOYYW3V75G1 "><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>
        Pengembara Kegelapan &copy; 2024
      </div>
    </footer>
    <!--footer end-->
    <script type="text/javascript">
      window.addEventListener('load', function() {
        setThemeBasedOnTime();   
      });

      let sections = document.querySelectorAll('section');
      let navLinks = document.querySelectorAll('.nav-item a');
      window.onscroll = () => {
      let top = window.scrollY + 60;
   
      if (top < 700) {
          navLinks.forEach(links => {
              links.classList.remove('active');
          });
          
          document.querySelector('.nav-item a[href="#"]').classList.add('active'); 
          return; 
      }

      sections.forEach(sec => {
          let offset = sec.offsetTop;
          let height = sec.offsetHeight;
          let id = sec.getAttribute('id');

          if (top >= offset && top < offset + height) {
              navLinks.forEach(links => {
                  links.classList.remove('active');
                  document.querySelector('.nav-item a[href*="' + id + '"]').classList.add('active');
              });
          }
      });
  };      

      function setThemeBasedOnTime() {
        const currentHour = new Date().getHours();
        console.log("Current Hour: " + currentHour); 
        const body = document.body;
        const toggleButton = document.getElementById('theme-toggle');

        if (currentHour >= 18 || currentHour < 6) {
          document.querySelector('body').classList.add('dark-mode');
          document.querySelector('.navbar').classList.add('dark-mode');
          document.querySelector('#article').classList.add('dark-mode');
          document.querySelector('#hero').classList.add('dark-mode');
          document.querySelector('#gallery').classList.add('dark-mode');
          document.querySelector('#schedule').classList.add('dark-mode');
          document.querySelector('#aboutme').classList.add('dark-mode');
          document.querySelector('footer').classList.add('dark-mode');
          document.querySelectorAll('.card').forEach(card => {
            card.classList.add('dark-mode');
          });
          document.querySelector('.navbar').classList.add('dark-mode');
          document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.add('dark-mode');
          });
          const offcanvasElements = document.querySelectorAll('.offcanvas');
          offcanvasElements.forEach(offcanvas => {
            offcanvas.classList.add('dark-mode');  
          });
          toggleButton.innerHTML = '🌞';
          document.getElementById('theme-toggle').classList.remove('btn-dark');
          document.getElementById('theme-toggle').classList.add('btn-light');
        } else {
          document.querySelector('body').classList.remove('dark-mode');
          document.querySelector('.navbar').classList.remove('dark-mode');
          document.querySelector('#article').classList.remove('dark-mode');
          document.querySelector('#hero').classList.remove('dark-mode');
          document.querySelector('#gallery').classList.remove('dark-mode');
          document.querySelector('#schedule').classList.remove('dark-mode');
          document.querySelector('#aboutme').classList.remove('dark-mode');
          document.querySelector('footer').classList.remove('dark-mode');
          document.querySelectorAll('.card').forEach(card => {
            card.classList.remove('dark-mode');
          });
          document.querySelector('.navbar').classList.remove('dark-mode');
          document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('dark-mode');
          });
          const offcanvasElements = document.querySelectorAll('.offcanvas');
          offcanvasElements.forEach(offcanvas => {
            offcanvas.classList.remove('dark-mode');  
          });
          toggleButton.innerHTML = '🌙';
          document.getElementById('theme-toggle').classList.add('btn-dark');
          document.getElementById('theme-toggle').classList.remove('btn-light');
        }
      }

      document.getElementById('theme-toggle').addEventListener('click', function() {
        document.querySelector('body').classList.toggle('dark-mode');
        document.querySelector('.navbar').classList.toggle('dark-mode');
        document.querySelector('#article').classList.toggle('dark-mode');
        document.querySelector('#hero').classList.toggle('dark-mode');
        document.querySelector('#gallery').classList.toggle('dark-mode');
        document.querySelector('#schedule').classList.toggle('dark-mode');
        document.querySelector('#aboutme').classList.toggle('dark-mode');
        document.querySelector('footer').classList.toggle('dark-mode');
        document.querySelectorAll('.card').forEach(card => {
          card.classList.toggle('dark-mode');
        });
        document.querySelectorAll('.nav-link').forEach(link => {
          link.classList.toggle('dark-mode');
        });
        const offcanvasElements = document.querySelectorAll('.offcanvas');
        offcanvasElements.forEach(offcanvas => {
          offcanvas.classList.toggle('dark-mode');  
        });

        const toggleButton = document.getElementById('theme-toggle');
        

        if (document.body.classList.contains('dark-mode')) {
          toggleButton.innerHTML = '🌞';
          document.getElementById('theme-toggle').classList.remove('btn-dark');
          document.getElementById('theme-toggle').classList.add('btn-light');
        } else {
          toggleButton.innerHTML = '🌙';
          document.getElementById('theme-toggle').classList.add('btn-dark');
          document.getElementById('theme-toggle').classList.remove('btn-light');
        }
      });


      function updateTime() {
        const date = new Date();
        const tanggal = date.toLocaleDateString('id-ID', {
          weekday: 'long',
          year: 'numeric',
          month: 'long',
          day: 'numeric'
        });

        const jam = String(date.getHours()).padStart(2, '0'); 
        const menit = String(date.getMinutes()).padStart(2, '0');
        const detik = String(date.getSeconds()).padStart(2, '0');

        const formattedTime = `${jam} : ${menit} : ${detik}`;

        document.getElementById('tanggal').textContent = tanggal;
        document.getElementById('jam').textContent = formattedTime;
      }

      const lastUpdateTimestamp = new Date(Date.now() - 10 * 60 * 1000); 

      function updateLastUpdate() {
          const now = new Date();
          const diff = Math.floor((now - lastUpdateTimestamp) / 1000); 
          let timeString = '';

          if (diff < 60) {
              timeString = `${diff} sec${diff !== 1 ? 's' : ''} ago`;
          } else if (diff < 3600) {
              const minutes = Math.floor(diff / 60);
              timeString = `${minutes} min${minutes !== 1 ? 's' : ''} ago`;
          } else if (diff < 86400) {
              const hours = Math.floor(diff / 3600);
              timeString = `${hours} hour${hours !== 1 ? 's' : ''} ago`;
          } else {
              const days = Math.floor(diff / 86400);
              timeString = `${days} day${days !== 1 ? 's' : ''} ago`;
          }

          const elements = document.querySelectorAll('#last-update');
          elements.forEach(el => {
            el.textContent = `Last Update : ${timeString}`;
          });
      }

      updateLastUpdate();
      setThemeBasedOnTime();
      setInterval(updateTime, 1000);

    </script>
  </body>
</html>