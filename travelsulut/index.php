<?php 
 
session_start(); // Memulai session
 
if (!isset($_SESSION['username'])) { // Jika session username belum ada
    header("Location: login.php"); // Redirect ke halaman index.php
} 
 
?>
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /> <!-- support html -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Sulut</title> <!-- judul halaman -->
    <link rel="stylesheet" href="css/style.css" /> <!-- untuk memanggil file css-->
    <link rel="icon" href="asset1/logo1.jpg"> <!-- untuk memberikan logo pada website-->
  </head>
  <body>
  
    <nav>
      <div class="layar-dalam"> 
        <div class="logo"> <!-- logo navbar -->
          <a href=""><img src="asset1/travel1.jpg" class="putih" width="660px"/></a>
        </div>
        <div class="menu"> <!-- menu navbar-->
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>


          <ul> <!-- pilihan navbar -->
            <li><a href="#pengenalan">Pengenalan</a></li>
            <li><a href="#manfaat">Manfaat</a></li>
            <li><a href="#wisata">Wisata</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="waktu.php">Waktu</a></li>
            <li><a href="#calender">Kalender</a></li>
            <li><a href="#maps">Maps</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
    

        </div>
      </div> 
    </nav>

    <div class="layar-penuh"> <!-- box beranda -->
      <header id="beranda">
        <div class="overlay"></div>
        <video autoplay muted loop> <!-- video background -->
          <source src="asset1/infowisatasulut.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>WISATA TRAVEL SULUT</h3>
          <p> Wisata Alam Di Sulawesi Utara</p>
      </section>
      </header>
      <main>
        <section id="pengenalan"> <!-- isi navbar pengenalan -->
          <div class="layar-dalam">
            <h3>Pengenalan</h3>
            <p class="ringkasan">
              Website ini dibuat untuk mempermudah wisatawan untuk mencari informasi mengenai wisata yang ada di Sulawesi Utara.
            </p>
            <div class="konten-isi">
              <p>
                  Kita menyediakan berbagai macam informasi mengenai wisata yang ada di Sulawesi Utara.
              </p>
            </div>
          </div>
        </section>
        <section class="abu-abu" id="manfaat"> <!-- isi navbar manfaat -->
          <div class="layar-dalam manfaat">
            <div>
              <img src="asset/cek1.png" />
              <h6>Mengenalkan Potensi Wisata ke Seluruh Dunia</h6>
              <p>
                Teknologi online sangat bermanfaat mengenalkan potensi wisata daerah kepada semua orang baik dalam skala nasional maupun internasional. 
              </p>
            </div>
            <div>
              <img src="asset/cek2.png" />
              <h6>Mempermudah Pemesanan layanan yang disediakan</h6>
              <p>
                Internet memudahkan calon pengunjung lokasi wisata untuk memesan kamar hotel yang berada jauh di daerah atau di negara lain. 
              </p>
            </div>
            <div>
              <img src="asset/cek3.png" />
              <h6>Membantu Mencari Lokasi Dengan Mudah Dan Strategis</h6>
              <p>
                Fitur – fitur pada teknologi online sangat bermanfaat untuk mencari lokasi termasuk tempat-tempat tujuan wisata. 
              </p>
            </div>
          </div>
        </section>
        <div class="container">
          <div id="wst-list" class="row">
          </div>
      </div>

        <section id="wisata"> <!-- isi navbar wisata -->
          <!-- buat input type search untuk cari lokasi --> 
          <input type="text" id="pencarianWisata" onkeyup="cariWisata()" placeholder="Cari..." class="cari" id="cari">
          <ul id="menuWisata">
          <div><li><a class="gambar1" id="bunaken" style="text-decoration:none" href="https://www.google.co.id/maps/place/Bunaken/@1.6128038,124.7504782,14z/data=!4m5!3m4!1s0x32879a3c17d8d75b:0xe07329f226330faf!8m2!3d1.6235162!4d124.7602683"><img src="asset1/gambar1.jpg" />Bunaken</a></li></div>
          <div><li><a class="gambar2" id="manadotua" style="text-decoration:none" href="https://www.google.co.id/maps/place/Manadotua+Island/@1.6329122,124.6989891,14z/data=!3m1!4b1!4m5!3m4!1s0x32879aa791574205:0xcfa5c2655231ec0a!8m2!3d1.6306918!4d124.7022382?shorturl=1"><img src="asset1/gambar2.jpg"/>Manado Tua</a></li></div>
          <div><li><a class="gambar3" id="pulaulihaga" style="text-decoration:none"  href="https://www.google.co.id/maps/place/Pulau+Lihaga/@1.761577,125.0324094,16z/data=!4m9!1m2!2m1!1sPulau+Lihaga!3m5!1s0x3287c760fab56899:0xf2ec6bcd7662fcb8!8m2!3d1.761577!4d125.0367868!15sCgxQdWxhdSBMaWhhZ2GSARJ0b3VyaXN0X2F0dHJhY3Rpb24"><img src="asset1/gambar3.jpg"/>Pulau Lihaga</a></li></div>
          <div><li><a class="gambar4" id="danaulinow" style="text-decoration:none" href="https://www.google.com/maps/place/Danau+Linow/@1.2708332,124.8088793,14z/data=!3m1!4b1!4m5!3m4!1s0x32876af0f84c2b1f:0xd9a9eb5e61927946!8m2!3d1.2708333!4d124.8263889"><img src="asset1/gambar4.jpg" />Danau Linow</a></li></div>
          <div><li><a class="gambar5" id="gardenia" style="text-decoration:none" href="https://www.google.com/maps/place/Gardenia+Country+Inn/@1.3482677,124.8339773,17z/data=!3m1!4b1!4m8!3m7!1s0x32876c94b3812b5b:0x18e14ecea091b6b0!5m2!4m1!1i2!8m2!3d1.3482677!4d124.836166"><img src="asset1/gambar5.jpg" />Gardenia Country Inn</a></li></div>
          <div><li><a class="gambar6" id="hutanpinus" style="text-decoration:none"  href="https://www.google.com/maps/place/Wisata+Hutan+Pinus+Dan+Pemandian+Air+Panas/@1.2840548,124.8209446,17z/data=!3m1!4b1!4m5!3m4!1s0x32876b015222a2d7:0xe87377410c2be800!8m2!3d1.2840508!4d124.8230921"><img src="asset1/gambar6.jpg" />Wisata Hutan Pinus Dan Pemandian Air Panas</a></li></div>
          <div><li><a class="gambar7" id="bukitrerer" style="text-decoration:none" href="https://www.google.com/maps/place/Bukit+Teletubbies+Rerer/@1.2902075,124.9158793,48700m/data=!3m1!1e3!4m12!1m6!3m5!1s0x3287191089b8c065:0x6267472f55a9ec5f!2sBukit+Teletubbies+Rerer!8m2!3d1.2902075!4d125.0559538!3m4!1s0x3287191089b8c065:0x6267472f55a9ec5f!8m2!3d1.2902075!4d125.0559538"><img src="asset1/gambar7.jpg" />Bukit Teletubbies Rerer</a></li></div>
          <div><li><a class="gambar8" id="danaucinta"  style="text-decoration:none" href="https://www.google.com/maps/place/Danau+%22Cinta%22+Makalehi/@2.736747,125.1677131,17z/data=!4m12!1m6!3m5!1s0x0:0x91515afabd4510de!2sDanau+%22Cinta%22+Makalehi!8m2!3d2.736747!4d125.1699018!3m4!1s0x0:0x91515afabd4510de!8m2!3d2.736747!4d125.1699018"><img src="asset1/gambar8.jpg" />Danau Cinta Makalehi</a></li></div>
          <div><li><a class="gambar9" id="pantaijiko" style="text-decoration:none" href="https://www.google.com/maps/place/Pantai+Jiko+%2F+Patokan/@0.6184005,124.5633685,17z/data=!4m5!3m4!1s0x32808332f592cd97:0xc1b1bf360d06b820!8m2!3d0.6184005!4d124.5655572"><img src="asset1/gambar9.jpg" />Pantai Jiko / Patokan</a></li></div>
          <div><li><a class="gambar10" id="rumahalam" style="text-decoration:none" href="https://www.google.com/maps/place/Rumah+Alam+Manado+Adventure+Park/@1.4779664,124.8888711,17z/data=!3m1!4b1!4m5!3m4!1s0x32870ae6032ce7fd:0x58f62a46a66c2af5!8m2!3d1.4779664!4d124.8910598"><img src="asset1/gambar10.jpg" />Rumah Alam Manado Adventure Park</a></li></div>
          <div><li><a class="gambar11" id="pulaumahoro" style="text-decoration:none" href="https://www.google.co.id/maps/place/Pulau+Mahoro/@2.6386618,125.4517562,12z/data=!4m5!3m4!1s0x328919fb8206a3b7:0x8e79e7695f1a6286!8m2!3d2.6497222!4d125.4863889"><img src="asset1/gambar11.jpg" />Pulau Mahoro</a></li></div>
          <div><li><a class="gambar12" id="pantailakban" style="text-decoration:none" href="https://www.google.co.id/maps/place/Pantai+Lakban+Ratatotok/@0.8492183,124.7086886,15z/data=!3m1!4b1!4m5!3m4!1s0x3280bae8313be087:0x1d362364493ea449!8m2!3d0.8492183!4d124.7086886"><img src="asset1/gambar12.jpg" />Pantai Lakban Ratatotok</a></li></div>
          <div><li><a class="gambar13" id="pantaicanada" style="text-decoration:none" href="https://www.google.co.id/maps/place/Pantai+Canada/@1.5984549,125.1533167,17z/data=!3m1!4b1!4m5!3m4!1s0x3287adb6bc0e8439:0x60ed0eec0c8670e7!8m2!3d1.5984549!4d125.1533167?shorturl=1"><img src="asset1/gambar13.jpg" />Pantai Canada Bitung</a></li></div>
          <div><li><a class="gambar14" id="tamanlauttumbak" style="text-decoration:none" href="https://www.google.co.id/maps/place/Tumbak,+Pusomaen,+Southeast+Minahasa+Regency,+North+Sulawesi/@0.9640981,124.883477,15z/data=!3m1!4b1!4m5!3m4!1s0x3280ca8ac4041025:0x4e307c1191e565c5!8m2!3d0.9731561!4d124.8865554?shorturl=1"><img src="asset1/gambar14.jpg" />Tumbak, Pusomaen, Southeast Minahasa Regency, North Sulawesi</a></li></div> 
          <div><li><a class="gambar15" id="bukitkasihkanonang" style="text-decoration:none" href="https://www.google.co.id/maps/place/Bukit+Kasih+-+Kanonang/@1.1643362,124.7658002,17z/data=!3m1!4b1!4m5!3m4!1s0x32874424f3dffd89:0x2ae951b91473ce1f!8m2!3d1.1643362!4d124.7658002?shorturl=1"><img src="asset1/gambar15.jpg" />Bukit Kasih - Kanonang</a></li></div>
        </ul>
        </section>

        <section id="team"> <!-- isi navbar team -->
          <div class="layar-dalam">
            <h3>Team Pengembangan</h3>
            <a class="button" style="text-decoration:none" href="https://drive.google.com/file/d/10h70xb-gYxNfJKPEolWD7VGYVKnmMPmL/view"><h4>LINK VIDEO UTS</h4></a>
            <a class="button" style="text-decoration:none" href="https://drive.google.com/file/d/1urTzBMmQySKgScz-AJ6Kf8-uwpSzkbzB/view"><h4>LINK VIDEO UAS</h4></a>
            <div class="tim">
            <div>
                <img src="asset/tim4.jpg" height="200px" />
                <h6>Yunihart Poli</h6>
                <span>20021106074</span>
              </div>
              <div>
                <img src="asset/tim1.jpg" height="200px" />
                <h6>Rhefel Anaada</h6>
                <span>20021106122</span>
              </div>
              <div>
                <img src="asset/tim2.jpg" height="200px"/>
                <h6>Andrew Tansil</h6>
                <span>20021106048</span>
              </div>
              <div>
                <img src="asset/tim3.jpg" height="200px"/>
                <h6>Putri Manialup</h6>
                <span>20021106046</span>
              </div>
            </div>
          </div>
        </section>
        
        <section class="abuabu" id="blog"> <!-- isi navbar blog -->
          <div class="layar-dalam">
            <h3>Blog</h3>
            <p class="ringkasan">
              Disini kita akan mencari tau apa saja keindahan yang di dapatkan dari Panorama Sulut. 
            </p>
            <div class="blog">
              <div class="area">
                <div class="text">
                  <article>
                    <h4><a href="#">Bagaimana dengan Manado?</a></h4>
                    <p>
                      Manado menjadi salah satu daerah yang menjadi pusat dari wisatawan berkunjung.
                    </p>
                  </article>
                </div>
                <div
                  class="gambar"
                  style="background-image: url('asset/blog1.jpg')">
                </div>              
              </div>
            </div>
          </div>
        </section>

      <section class="cls" id="calender"> 
      <div class="layar-dalam"> 
        <h3>Kalender</h3>
        <div class="calender">
          <iframe src="https://calendar.google.com/calendar/embed?ctz=Asia%2FManado" style="border: 0" width="100%" height="450" frameborder="0" scrolling="yes"></iframe>
        </div>
      <section>

       <section class="mps" id="maps">
       <div id="map"></div>
          <div class="layar-dalam">
          <h3>Map Yang Bisa Diakses</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.929079079079!2d124.8984459142898!3d1.477966389909898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870ae6032ce7fd%3A0x58f62a46a66c2af5!2sRumah+Alam+Manado+Adventure+Park!5e0!3m2!1sid!2sid!4v1559240981246!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>

      </main>
      <footer id="info"> <!-- info -->
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            WEB.
            WISATA.
            SULUT.
          </div>
          <div>
            <h5>Kontak</h5>
            +6285824045636
            email:mdohart4@gmail.com
          </div>
          <div>
            <h5>Lainnya</h5>
            tugaspengembanganweb
            #uts#uas#tugas
          </div>

      </footer>
    </div>
    <script type="" src="js/cariwisata.js">
    </script>
  </body>

</html>
