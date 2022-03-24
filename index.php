<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Penomoran Gaji by haruman Wiguna</title>
  <meta content="" name="description" />

  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span>Solution Sallary</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Pendaftaran Gaji </a></a></li>
          <li><a class="nav-link scrollto" href="#services">Data Penerima Gaji</a></li>

          <li>
            <a class="getstarted scrollto" href="#about">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">
            We offer modern solutions for sallary your business
          </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">
            We are team of talented solutions for your sallary business
          </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="./assets/img/hero-img.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3 class="text-center">Masukkan Gaji anda</h3>
              <form action="./config/actlog.php" method="POST">
                <div class="mb-3">
                  <label for="nik" class="form-label">Masukkan NIK anda</label>
                  <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                  <label for="jk" class="form-label">Jenis Kelamin</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="lk" value="Laki-Laki">
                    <label class="form-check-label" for="exampleRadios1">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="pr" value="Perempuan">
                    <label class="form-check-label" for="exampleRadios2">
                      Perempuan
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label">Golongan Anda</label>
                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                    <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($con, "select * from golongan");

                    while ($datall = mysqli_fetch_array($sql)) {
                      echo "<input type='radio' class='btn-check' name='golbtn' id='btngol" . $datall['Golongan_ID'] . "' value='" . $datall['Golongan_ID'] . "' autocomplete='off' oninput='GetDetail(this.value)'>";
                      echo " <label class='btn btn-outline-primary' for='btngol" . $datall['Golongan_ID'] . "'>Gologan " . $datall['Golongan_ID'] . "</label></br>";
                    }; ?>
                  </div>
                </div>
                <div class='mb-3'>
                  <label for='gapok' class='form-label'>Gaji Pokok </label>
                  <input type='text' class='form-control' id='gapok' name='gapok'>
                </div>
                <div class='mb-3'>
                  <label for='potongan' class='form-label'>Potongan</label>
                  <input type='text' class='form-control' id='potongan' name='potongan'>
                </div>
                <div class='mb-3'>
                  <label for='tunjangan' class='form-label'>Tunjangan</label>
                  <input type='text' class='form-control' id='tunjangan' name='tunjangan'>
                </div>
                <div class='mb-3'>
                  <label for='total' class='form-label'>Total Gaji</label>
                  <input type='text' class='form-control' id='total' name='total'>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit"></input>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Data Penerima Gaji</h2>
          <p>Daftar Penerima Gaji yang sudah kami sorting</p>
        </header>

        <div class="row">

        </div>

        <div class="col-lg-15 mt-15 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <table class="table table-hover">
              <tr>
                <th>Nomor</th>
                <th>Nomor Induk Kewarganegaraan</th>
                <th>Nama Pegawai</th>
                <th>Tunjangan Yang didapatkan</th>
                <th>Golongan</th>
                <th>Total Gaji yang diterima</th>
              </tr>
              <?php
              include "./config/koneksi.php";
              $sql = mysqli_query($con, "select karyawan.nik,karyawan.nama,karyawan.tunjangan,karyawan.Golongan,gajikaryawan.gajiditerima from karyawan inner join golongan on karyawan.golongan = golongan.Golongan_ID inner join gajikaryawan on karyawan.nik = gajikaryawan.nik");
              $no = 1;
              while ($data = mysqli_fetch_array($sql)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nik'] . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['tunjangan'] . "</td>";
                echo "<td>" . $data['Golongan'] . "</td>";
                echo "<td>" . $data['gajiditerima'] . "</td>";
                echo "</tr>";
                $no++;
              }

              ?>
            </table>
          </div>
        </div>


    </section>
    <!-- End Values Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Haruman</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // onkeyup event will occur when the user 
    // release the key and calls the function
    // assigned to this event
    function GetDetail(str) {
      if (str.length == 0) {
        document.getElementById("tunjangan").value = "";
        document.getElementById("gapok").value = "";
        document.getElementById("total").value = "";
        document.getElementById("potongan").value = "";

        return;
      } else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

          // Defines a function to be called when
          // the readyState property changes
          if (this.readyState == 4 &&
            this.status == 200) {

            // Typical action to be performed
            // when the document is ready
            var myObj = JSON.parse(this.responseText);

            // Returns the response data as a
            // string and store this array in
            // a variable assign the value 
            // received to first name input field

            document.getElementById("tunjangan").value = myObj[0];
            document.getElementById("gapok").value = myObj[1];
            document.getElementById("total").value = myObj[2];
            document.getElementById("potongan").value = myObj[3];
            // Assign the value received to
            // last name input field

          }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", "get.php?golongan_id=" + str, true);

        // Sends the request to the server
        xmlhttp.send();
      }
    }
  </script>

</body>

</html>