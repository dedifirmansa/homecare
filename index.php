<?php 

include "header.php"; 
include "config.php"; 

?>

<?php
if (isset($_POST['submit'])) {
  $nama    = $_POST['nama'];
  $telp    = $_POST['telp'];
  $jenis_layanan = $_POST['jenis_layanan'];
  $perawat    = $_POST['perawat'];
  $tgl    = date($_POST['tgl']);
  $jam    = $_POST['jam'];

  // $ceknis = mysqli_num_rows(mysqli_query($link_yics, "SELECT nama FROM pelanggan WHERE nama='$nama' AND tgl='$tgl'"));

  if ($ceknis > 0) {
?>
    <script language="JavaScript">
      alert('Oops! Nama Sudah Terdaftar ...');
      document.location = 'index.php';
    </script>
  <?php
  } else {
    // $link_yics->query("INSERT INTO pelanggan VALUES('$nama', '$jenis_layanan', '$tgl', '$telp', '$perawat', '$jam')");
    $insert = mysqli_query($link_yics, "INSERT INTO pelanggan(no_telpon, nama, pelayanan, perawat, tanggal, waktu) VALUES ('$telp', '$nama', '$jenis_layanan', '$perawat', '$tgl', '$jam')");
  ?>
    <script language="JavaScript">
      alert('Good! Input Data Konsultasi Berhasil ...');
      document.location = './';
    </script>
<?php
  }
}
?>
<div class="hero-wrap">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(asset/images/bg_5.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end">
          <div class="col-md-6 ftco-animate">
            <div class="text w-100">
              <h1 class="mb-4">Selamat Datang Di Zaenuddin Pratama Home Care</h1>
              <p>
                Sebuah Kelompok Komunitas Belajar Bahasa inggris GRATIS
                Dengan Tutor tutor Yang Parah EXPERT....

              </p>

              <!--Dalam Pengembangan-->
              <!--                
                    <p>
                    <a href="#" class="btn btn-primary">Book an appointment</a>
                  </p>
                -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-item" style="background-image: url(asset/images/bg_6.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end">
          <div class="col-md-6 ftco-animate">
            <div class="text w-100">
              <h1 class="mb-4">Welcome to Sharing And Share Center</h1>
              <p>
                Sebuah Kelompok Komunitas Belajar Bahasa inggris GRATIS
                Dengan Tutor tutor Yang Parah EXPERT....

              </p>
              <!--Dalam Pengembangan-->
              <!--                 
                  <p>
                    <a href="#" class="btn btn-primary">Book an appointment</a>
                  </p>
                -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-12">
        <div class="wrap-appointment d-md-flex">
          <div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
            <span class="subheading">Buat Perjanjian</span>
            <h2 class="mb-4">Gratis Konsultasi</h2>
            <!--form-->
            <form action="index.php" class="appointment" method="post">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="telp" type="text" class="form-control" placeholder="Nomer Telpon" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="jenis_layanan" id="" class="form-control" required>
                          <option value="">Pilih Pelayanan</option>
                          <option value="Perawatan Lansia">Perawatan Lansia</option>
                          <option value="Perawatan Orang Sakit">Perawatan Orang Sakit</option>
                          <option value="Pasien Medis">Pasien Medis</option>
                          <option value="Perawatan Orang Tua">Perawatan Orang Tua</option>
                          <option value="Perawatan">Perawatan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="perawat" id="" class="form-control" required>
                          <option value="">pilih Perawat</option>
                          <option value="Ahmad Budi Ariana">Ahmad Budi Ariana</option>
                          <option value="Bahri Rahman">Bahri Rahman</option>
                          <option value="Zaenuddun">Zaenuddun</option>
                          <option value="Fikrianto Ahmad">Fikrianto Ahmad</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon">
                        <span class="fa fa-calendar"></span>
                      </div>
                      <input name="tgl" type="text" class="form-control appointment_date" placeholder="Tanggal" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon">
                        <span class="fa fa-clock-o"></span>
                      </div>
                      <input name="jam" type="text" class="form-control appointment_time" placeholder="Waktu" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" name="submit" value="Cetak" class="btn btn-secondary py-3 px-4"></input>
                    <!-- <input type="submit" name="submit" value="Send message" class="btn btn-secondary py-3 px-4" /> -->
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 bg-white text-center p-5">
            <div class="desc border-bottom pb-4">
              <h2>Zaenuddin Home Care</h2>
              <div class="opening-hours">
                <h4>Buka</h4>
                <div class="row ftco-counter pb-5" id="section-counter">
                  <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="24">0</strong>
                      </div>
                      <div class="text">
                        <span><b>Jam</b></span>
                      </div>
                    </div>
                  </div>
                </div>





                <!--
                    <p class="pl-3">
                      <span></span>
                        <strong>Monday – Friday:</strong> 9am to 20 pm</span
                      >
                      <span><strong>Saturday :</strong> 9am to 17 pm</span>
                    </p>
                    <h4>Vacations:</h4>
                    <p class="pl-3">
                      <span>All Sunday Days</span>
                      <span>All Official Holidays</span>
                    </p>
                  </div>
                -->
              </div>
              <div class="desc pt-4">
                <h3 class="heading">Telpon Darurat</h3>
                <span class="phone"><a href="tel:+62 87 887 372 715" class="btn btn-primary">Telpon</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Kami Menyediakan Pelayanan</span>
        <h2></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-chiropractic"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Pasca Operasi</h3>
            <p>
              Pelayanan ini bisa dilakukan oleh pengidap stroke pasca operasi.
              Pengidap stroke membutuhkan proses perawatan yang cukup lama dan
              membutuhkan perhatian khusus.

            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-acupuncture"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Lansia</h3>
            <p>
              Pelayanan jenis ini biasanya dilakukan oleh orang-orang yang sibuk dan
              tidak mempunyai waktu di rumah untuk merawat orangtua yang membutuhkan pelayanan

            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-electrotherapy"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Anak</h3>
            <p>
              Layanan Perawatan yang ditujukan untuk Anak Anda, mulai dari newborn, balita, dan berkebutuhan khusus.
              Layanan ini terdiri atas layanan perawatan baby newborn, layanan perawatan dengan pendampingan 24 Jam,
              dan layanan perawatan pada anak berkebutuhan khusus.

            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-examination"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Baby Care</h3>
            <p>
              Pelayanan ini dikhususkan untuk merawat bayi dan ibu pasca melahirkan.
              Perawatan ini bermanfaat bagi ibu yang belum mengerti cara perawatan pada bayi yang baru lahir.

            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-lymph-nodes"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Luka</h3>
            <p>
              Layanan perawatan luka dengan metode modern, dimana luka akan 30% lebih cepat sembuh dari pada balutan luka konvensional.
              Perawatan ini mencakup perawatan luka cidera, luka bakar, luka diabetes, luka dekubitus, luka kanker, luka pasca operasi dan luka

            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-bone"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Perawatan Medis</h3>
            <p>
              Layanan tenaga medis profesional dan tersertifikasi untuk pasien terpasang alat,
              dimana pelayanan medis akan dilakukan secara intensif dan berkelanjutan selama 24 jam setiap harinya.
            </p>
            <!--Dalam Pengembangan-->
            <!--<p><a href="#" class="btn-custom">Read more</a></p>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Dalam Pengembangan-->
<!--
    <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts Chiropractor / Therapist</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4 col-lg ftco-animate d-flex">
            <div class="staff bg-primary">
              <div class="img-wrap d-flex align-items-stretch">
                <div
                  class="img align-self-stretch"
                  style="
                    background-image: url(images/xstaff-1.jpg.pagespeed.ic.8e2vi2ER3S.jpg);
                  "
                ></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Lloyd Wilson</h3>
                <span class="position mb-2">Chief Medical Officer</span>
                <div class="faded">
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-google"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-instagram"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg ftco-animate d-flex">
            <div class="staff bg-primary">
              <div class="img-wrap d-flex align-items-stretch">
                <div
                  class="img align-self-stretch"
                  style="background-image: url(images/staff-2.jpg)"
                ></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Rachel Parker</h3>
                <span class="position mb-2">Chiropractor</span>
                <div class="faded">
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-google"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-instagram"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg ftco-animate d-flex">
            <div class="staff bg-primary">
              <div class="img-wrap d-flex align-items-stretch">
                <div
                  class="img align-self-stretch"
                  style="
                    background-image: url(images/xstaff-3.jpg.pagespeed.ic.SDiG7_j0Ni.jpg);
                  "
                ></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Ian Smith</h3>
                <span class="position mb-2"
                  >Clinical Chiropractic Assistant</span
                >
                <div class="faded">
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-google"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-instagram"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg ftco-animate d-flex">
            <div class="staff bg-primary">
              <div class="img-wrap d-flex align-items-stretch">
                <div
                  class="img align-self-stretch"
                  style="
                    background-image: url(images/xstaff-4.jpg.pagespeed.ic.xGkp_LYdBZ.jpg);
                  "
                ></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Alicia Henderson</h3>
                <span class="position mb-2">Licensed Massage Therapist</span>
                <div class="faded">
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-google"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-instagram"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg ftco-animate d-flex">
            <div class="staff bg-primary">
              <div class="img-wrap d-flex align-items-stretch">
                <div
                  class="img align-self-stretch"
                  style="
                    background-image: url(images/xstaff-5.jpg.pagespeed.ic.O1TcYN7-Jx.jpg);
                  "
                ></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Lloyd Wilson</h3>
                <span class="position mb-2">Front Desk Coordinator</span>
                <div class="faded">
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-google"></span
                      ></a>
                    </li>
                    <li class="ftco-animate">
                      <a
                        href="#"
                        class="d-flex align-items-center justify-content-center"
                        ><span class="fa fa-instagram"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-6 d-flex order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image: url(asset/images/about.jpg)">
          <a href="#" class=" d-flex justify-content-center align-items-center">
            <span class="fa fa-play"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 pr-md-5 py-md-5">
        <div class="row justify-content-start py-5">
          <div class="col-md-12 heading-section ftco-animate">
            <span class="subheading">Selamat Datang Di Zaenudin Home Care</span>
            <h2 class="mb-4">Tentang Zaenudin Home Care</h2>
            <p>
              <b>"Kami Memahami Kebutuhan Anda Untuk Merawat Keluarga Anda Terkasih Dengan Profesional
                Dan Sepenuh Hati Di manapun Dan Kapanpun."</b><br>
              Klinik Pratama Zaenudin adalah Agency penyalur perawat Home Care yang melayani
              perawatan pasien di rumah selama 24 jam. Kami menghadirkan layanan perawat Home care
              Live-in mulai dari perawatan orang tua,perawat orang sakit,hingga pasien medis atau pasien
              yang terpasang alat atau ICU.





            </p>
          </div>
        </div>

        <!--Dalam Pengembangan-->
        <!---->
        <div class="row ftco-counter pb-5" id="section-counter">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">

              </div>
              <div class="text">
                <span></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">

              </div>
              <div class="text">
                <span></span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  -->


  <!--Dalam Pengembangan-->
  <!--
    </section>
    <section class="ftco-section testimony-section bg-dark">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div
            class="col-md-7 heading-section heading-section-white text-center ftco-animate"
          >
            <span class="subheading">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-quote-left"></span>
                  </div>
                  <div class="text">
                    <p class="mb-4">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="
                          background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                        "
                      ></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-quote-left"></span>
                  </div>
                  <div class="text">
                    <p class="mb-4">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="
                          background-image: url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg);
                        "
                      ></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-quote-left"></span>
                  </div>
                  <div class="text">
                    <p class="mb-4">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_3.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-quote-left"></span>
                  </div>
                  <div class="text">
                    <p class="mb-4">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="
                          background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                        "
                      ></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-quote-left"></span>
                  </div>
                  <div class="text">
                    <p class="mb-4">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="
                          background-image: url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg);
                        "
                      ></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid px-md-0">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-1.jpg.pagespeed.ic.pSu_3I3aH7.jpg);
              "
            >
              <a
                href="images/work-1.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Foot Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-2.jpg.pagespeed.ic.FdfdKdom1Z.jpg);
              "
            >
              <a
                href="images/work-2.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Arm Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-3.jpg.pagespeed.ic.WOrj1l163j.jpg);
              "
            >
              <a
                href="images/work-3.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Shoulder Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-4.jpg.pagespeed.ic.V1tNqjnsBv.jpg);
              "
            >
              <a
                href="images/work-4.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Back Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-5.jpg.pagespeed.ic.jil-P-r-Bd.jpg);
              "
            >
              <a
                href="images/work-5.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Head &amp; Migraines</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="
                background-image: url(images/xwork-6.jpg.pagespeed.ic.uh23ozItfF.jpg);
              "
            >
              <a
                href="images/work-6.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Wear &amp; Tear</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="background-image: url(images/work-7.jpg)"
            >
              <a
                href="images/work-7.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Arm Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div
              class="work img d-flex align-items-center"
              style="background-image: url(images/work-8.jpg)"
            >
              <a
                href="images/work-8.jpg"
                class="icon image-popup d-flex justify-content-center align-items-center"
              >
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Lower Back Pain</a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20 rounded"
                style="background-image: url('images/image_1.jpg')"
              >
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                  <div
                    class="img author"
                    style="
                      background-image: url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg);
                    "
                  ></div>
                  <div class="desc pl-3">
                    <span>Posted by John doe</span>
                    <span>24 February 2020</span>
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >What Every Athlete Needs To Know About Injury Recovery</a
                  >
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20 rounded"
                style="background-image: url('images/image_2.jpg')"
              >
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                  <div
                    class="img author"
                    style="background-image: url(images/person_3.jpg)"
                  ></div>
                  <div class="desc pl-3">
                    <span>Posted by John doe</span>
                    <span>24 February 2020</span>
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >What Every Athlete Needs To Know About Injury Recovery</a
                  >
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20 rounded"
                style="
                  background-image: url(images/ximage_3.jpg.pagespeed.ic.V1tNqjnsBv.jpg);
                "
              >
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                  <div
                    class="img author"
                    style="
                      background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                    "
                  ></div>
                  <div class="desc pl-3">
                    <span>Posted by John doe</span>
                    <span>24 February 2020</span>
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >What Every Athlete Needs To Know About Injury Recovery</a
                  >
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->
  <?php include "footer.php"; ?>