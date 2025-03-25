<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Farid Store | Products</title>
<style>

.rounded-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .rounded-button:hover {
            background-color: #45a049;
        }
        
        
    </style>

         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Selamat Datang Di Farid Store!</h1>
            </div>
             
        </div>
        

       <!-- Banner -->
<div class="container px-0" style="background-color:#ECEBDE;padding-top:15px;padding-bottom:15px;">
    <div class="slides px-4 mb-4 mt-4">
        <div class="slide">
            <img src="produk/banner1.webp" alt="" class="w-100">
        </div>
        <div class="slide">
            <img src="produk/banner2.png" alt="" class="w-100">
        </div>
        <div class="slide">
            <img src="produk/banner2.jpg" alt="" class="w-100">
        </div>
        <div class="slide">
            <img src="produk/COKLAT APEL.jpg" alt="" class="w-100">
        </div>
        <div class="navigation">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</div>

<br></br>

<style>
    .slides {
        position: relative;
        width: 100%; /* Lebar slider */
        height: 540px; /* Tinggi tetap */
        overflow: hidden; /* Sembunyikan bagian gambar yang melampaui batas */
    }

    .slide img {
        width: 100%; /* Lebar gambar mengikuti lebar slider */
        height: 100%; /* Tinggi gambar mengikuti tinggi slider */
        object-fit: cover; /* Crop otomatis sambil mempertahankan aspek rasio */
    }

    <style>


        /* Membuat kontainer utama agar mengisi layar */
        .container {
            width: 80%; /* Lebar penuh */
            max-width: none; /* Menghilangkan batasan lebar */
            padding: 20px; /* Menambahkan sedikit ruang di sekitar kontainer */
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Agar kontainer mengisi sisa ruang */
            overflow-y: auto; /* Mengatasi konten yang lebih tinggi dari layar */
        }

        h1 {
            margin: 0;
            padding-bottom: 20px;
            text-align: center;
        }

        .ad {
            display: flex;
            flex-wrap: wrap; /* Membuat elemen-elemen iklan dalam baris */
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-sizing: border-box;
        }

        /* Thumbnail size yang dapat disesuaikan */
        .thumbnail {
            width: 100%; /* Agar thumbnail mengisi seluruh lebar pada perangkat kecil */
            max-width: 400px; /* Batasan lebar thumbnail */
            height: 400; /* Menyesuaikan tinggi berdasarkan rasio gambar */
            background-size: cover;
            background-position: center;
            margin-bottom: 10px;
        }

        .thumbnail-1 {
            background-image: url('img/GOJEK.jpg');
        }
        .thumbnail-2 {
            background-image: url('img/Traveloka.webp');
        }
        .thumbnail-3 {
            background-image: url('img/3.jpg');
        }
        .thumbnail-4 {
            background-image: url('img/4.jpg');
        }
        .thumbnail-5 {
            background-image: url('img/5.jpg');
        }
        .thumbnail-6 {
            background-image: url('img/6.jpg');
        }

        .content {
            flex: 1;
            padding-left: 10px;
        }

        .content h2 {
            margin: 0 0 10px;
        }

        .content p {
            margin: 0 0 10px;
        }

        /* Menambahkan efek grid pada tampilan layar lebih besar */
        @media (min-width: 768px) {
            .ad {
                display: grid;
                grid-template-columns: 1fr 1fr; /* Dua kolom untuk iklan */
                gap: 20px;
            }

            /* Menyesuaikan ukuran thumbnail pada layar lebih besar */
            .thumbnail {
                width: 100%; /* Lebar penuh pada perangkat besar */
                max-width: 600px; /* Membatasi ukuran maksimal pada layar besar */
                height: 300px; /* Menentukan tinggi */
            }
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>

</style>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        
        if (n > slides.length) {
            slideIndex = 1;
        } 
        if (n < 1) {
            slideIndex = slides.length;
        }
        
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; // Sembunyikan semua slide
        }
        
        slides[slideIndex - 1].style.display = "block"; // Tampilkan slide saat ini
    }

    // Fungsi untuk otomatis mengganti slide setiap 3 detik
    setInterval(function() {
        plusSlides(1); // Pindah ke slide berikutnya
    }, 3000); // Ganti setiap 3000 ms (3 detik)

</script>

  

        <h1>Produk Terpopuler</h1>


<div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="produk/ml.jpg" alt="Responsive image">
                          <div class="caption">
                              <h5>Game Online</h5>
                             
                            </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="produk/ig.jpg" alt="Responsive image">
                          <div class="caption">
                              <h5>Follower Sosmed</h5>
                              </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="produk/capcut.jpg" alt="Responsive image">
                          <div class="caption">
                              <h5>Editing</h5>         
                        </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="produk/streaming.jpg" alt="Responsive image">
                          <div class="caption">
                              <h5>Streaming</h5>
                              </div>
                      </div>
                  </div>

                  <br><br><br>
                      
                  <div>
                  <a href="Products.php" class="rounded-button">Lihat Lebih Banyak</a>
                </div>
                  
              </div>
             
          </div><br><br><br>


          <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/topup.png"/>
             <div class="caption">
                 <h4>Top Up Game</h4>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/premium.jpg"/>
             <div class="caption">
                 <h4>Produk Digital</h4>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/sosmed.jpg"/>
             <div class="caption">
                 <h4>Booster Sosmed</h4>
             </div>
            </a>
                     </div>
        </div>
 
             </div>

<br><br><br>
<div>
        <!-- Iklan 1 -->
  <div class="ad">
            <div class="thumbnail thumbnail-1"></div>
            <div class="content">
                <h2>Jelajahi Kuliner Spektakuler</h2>
                <p>Nikmati kuliner andalanmu bersama GoFood, jadikan moment bersama keluarga jadi lebih ceria. Promo ceria hingga 30% dari kita untuk semua.</p>
                <a href="https://gofood.co.id/pekanbaru/restaurants/near_me" class="rounded-button">Buka GoFood</a>
            </div>
        </div>

      
        <!-- Iklan 2 -->
        <div class="ad">
            <div class="thumbnail thumbnail-2"></div>
            <div class="content">
                <h2>Promo Liburan Bersama Traveloka</h2>
                <p>Deskripsi singkat tentang produk B. Hubungi penjual untuk informasi lebih lanjut.</p>
                <a href="https://www.traveloka.com/en-id?id" class="rounded-button">Pesan Sekarang</a>
            </div>
        </div>

        <!-- Apa Itu Bisnis -->
        <div class="ad">
        <div class="content">
            <h2>Membangun Bisnis Dari Nol</h2>
            <p>Shoutout ‪@ErikaRichardo‬ 2:05 buat bisnisnya @by.painters
            </p>
<p>Kalo kalian mau belajar keuangan + Investasi saham, pake kode promo gw : 
“RAYMOND” ( Diskon 15% )
</p>
<p>Jadi Member UsahaKita di <a href=http://ternakuang.id> BelajarBisnis.Com </a> </p>
            <a href="https://www.youtube.com/@RaymondChins" class="rounded-button">Kunjungi Channel</a>
        </div>
        <iframe width="540" height="280" src="https://www.youtube.com/embed/8g1H3ipDNOs" title="Cara Bangun Bisnis dari Nol - Mulai Dari Sini" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</body>
</html>
                </div>
        
              

       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> USAHAKITA | UNIVERSITAS MUHAMMADIYAH RIAU</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
