<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
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
  <body class="bg-danger-subtle">
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

    <div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto">
      <div class="card border-0 shadow rounded-5">
        <div class="card-body">
          <div class="text-center mb-3">
            <i class="bi bi-person-circle h1 display-4"></i>
            <p>My Daily Journal</p>
            <hr />
          </div>
          <form action="" method="post">
            <input
              type="text"
              name="user"
              class="form-control my-4 py-2 rounded-4"
              placeholder="Username"
            />
            <input
              type="password"
              name="pass"
              class="form-control my-4 py-2 rounded-4"
              placeholder="Password"
            />
            <div class="text-center my-3 d-grid">
              <button class="btn btn-danger rounded-4">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
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
<?php
}
?>