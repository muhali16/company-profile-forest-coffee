<?php 
include 'database/store.php';
/*
 * Website Company Profile Forest Coffee
 * 
 * Nama     : Muhammad Ali Mustaqim
 * NIM      : 77222329
 * 
 * Disclaimer: 
 * Website Forest Coffee dibuat untuk memenuhi syarat kompeten/lulus pada 
 * Uji Kompetensi/Sertifikasi Kompetensi di LSP Universitas 
 * Bina Sarana Informatika. Website ini memiliki nama fiktif dan tidak
 * mengarah kepada pelaku usaha manapun. Segala asset gambar pada projek 
 * ini diambil dari website www.unsplash.com. Oleh karena itu, gambar
 * tidak mengandung copyright.
*/

define( 'BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . "/lsp_bsi");
$req_uri = explode('/',$_SERVER['REQUEST_URI'] );

/**
 * Baris ini digunakan untuk menemukan enpoint dari url
 * jika terjadi kesalahan atau error
 * ubah indexnya menjadi 2 atau 1
 */
$req_uri = $req_uri[2];

// melakukan pengecekan apakah ada method post yang dikiirim ke halaman ini
if(isset($_POST['send'])){
    // mengambil data dari method post untuk dimasukan ke dalam variabel
    $nama = $_POST['nama'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // melakukan insert data melalui function store() dari file database/store.php
    store($nama, $email, $message, $number);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Judul -->
    <title>Forest Coffee</title>

    <!-- Mendefinisikan icon pada tab browser -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Preloader -->
    <section id="preloader">
        <div class="centered" style="min-height: 100vh; min-width: 100%;">
            <div class="d-flex flex-column gap-3">
                <img src="images/logo.png" width="100px" alt="Logo">
                <h1 class="fw-bold fs-1 text-white">Forest Coffee</h1>
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Navbar -->
    <nav class="position-fixed p-2">
      <div class="container justify-content-between d-flex p-2">
          <div class="d-flex">
              <img src="images/logo.png" width="25" height="25" alt="Logo">
              <h3 class="text-white fs-5 ms-2">Forest Coffee</h3>
          </div>
          <div class="position-relative fit-content">
              <button id="toggle-menu" class="border border-1 border-white rounded-3 bg-transparent">
                <svg id="toggle-arrow" class="transition-all" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-caret-down" viewBox="0 0 16 16"> <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/> </svg>
              </button>
              <ul id="menu" class="justify-content-center responsive-nav fit-content transition-all">
                  <li class="nav-item">
                      <a class="nav-link text-success fw-bold" href="<?= BASE_URL ?>/">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-success fw-bold" href="<?= BASE_URL ?>/portofolio">Portofolio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-success fw-bold" href="<?= BASE_URL ?>/galeri">Galeri</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-success fw-bold" href="<?= BASE_URL ?>/hubungi">Hubungi</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main -->
    <main class="bg-cover">
        <?php

        // mengecek apakah ada file dari url yang diterima
        if(file_exists("$req_uri.php") || $req_uri == ''){
            // jika ada, maka masukan ke dalam file index.php
            include ($req_uri == '' ? 'beranda' : $req_uri) . ".php";
        } else {
            // jika tidak ada, maka akan menampilkan halaman error 404
            include '404.html';
        }
        ?>
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <footer class="bg-green py-4">
        <div class="container text-center">
            <Dibuat class="fs-6 text-white text-thin">&#169; Muhammad Ali Mustaqim, 2023<br>Dibuat untuk memenuhi syarat Uji Kompetensi LSP Universitas Bina Sarana Informatika.</p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Script for preloader -->
    <script type="text/javascript">
        let preloader = document.querySelector('#preloader'); // mengambil id tampilan preloader
        window.addEventListener('load', function(){
            preloader.style.display = 'none'; // menyembunyikan tampilan preloader saat halaman telah selesai render semua asset website
        })
    </script>
    <!-- End script for preloader -->

    <!-- Script for toggle menu -->
    <script type="text/javascript">
        let toggleButton = document.querySelector('#toggle-menu'); // mengambil element html dengan id = toggle-menu
        let toggleArrow = document.querySelector('#toggle-arrow'); // mengambil element html dengan id = toggle-arrow
        let navMenu = document.querySelector('#menu'); // mengambil element html dengan id = menu

        toggleButton.addEventListener('click', function(){
            // mengecek apakah toggleArrow memiliki class 'up'
            if(toggleArrow.classList.contains('up')){
                // jika ada maka jalankan perintah berikut
                toggleArrow.style.transform = '';
                toggleArrow.classList.remove('up');
                navMenu.style.display = 'none';
            } else {
                // jika tidak ada, maka jalankan perintah berikut
                toggleArrow.style.transform = 'rotate(180deg)';
                toggleArrow.classList.add('up');
                navMenu.style.display = 'inline';
            }
        })
    </script>
    <!-- End Script for toggle menu -->
</body>
</html>