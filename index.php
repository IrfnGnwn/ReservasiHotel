<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IG Hotel - Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
  </head>
<style>

      .avaibility-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .avaibility-form {
        margin-top: 0px;
        padding: 0 35px;
      }
    }
</style>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<!-- Awal Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/carousel2.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/carousel1.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/carousel3.jpg" class="w-100 d-block">
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Carousel -->

<!-- Awal Check -->
<div class="container avaibility-form">
  <div class="col-lg-12 bg-white shadow p-4 rounded">
    <h5 class="mb-4">Check Booking Availability</h5>
    <form>
      <div class="row align-items-end">
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:50;">Check-in</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:50;">Check-out</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:50;">Dewasa</label>
          <select class="form-select shadow-none">
            <option selected>Pilih Jumlah</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            <option value="4">Empat</option>
            <option value="5">Lima</option>
          </select>
        </div>
        <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight:50;">Anak-Anak</label>
          <select class="form-select shadow-none">
            <option selected>Pilih Jumlah</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            <option value="4">Empat</option>
            <option value="5">Lima</option>
          </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn text-white shadow-none custom-bg">Kirim</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Akhir Check -->

<!-- Awal Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">KAMAR KAMI</h2>

 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="images/rooms/1.jpg" class="card-img-top">
       <div class="card-body">
        <h5>Standard Room</h5>
         <h6 class="mb-4">Rp 200.000/Malam</h6>
         <div class="features mb-4">
          <h6 class="mb-1">Fitur</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Kamar
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Kamar Mandi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Balkon
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            3 Sofa
          </span>
         </div>
         <div class="facilities mb-4">
          <h6 class="mb-1">Fasilitas</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Televisi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            AC
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Cewe Tobrut
          </span>
         </div>
         <div class="rating mb-4">
          <h6 class="mb-1">Penilaian</h6>
           <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
           </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lebih Detail</a>
         </div>
       </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="images/rooms/1.jpg" class="card-img-top">
       <div class="card-body">
        <h5>Standard Room</h5>
         <h6 class="mb-4">Rp 200.000/Malam</h6>
         <div class="features mb-4">
          <h6 class="mb-1">Fitur</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Kamar
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Kamar Mandi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Balkon
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            3 Sofa
          </span>
         </div>
         <div class="facilities mb-4">
          <h6 class="mb-1">Fasilitas</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Televisi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            AC
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Cewe Tobrut
          </span>
         </div>
         <div class="rating mb-4">
          <h6 class="mb-1">Penilaian</h6>
           <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
           </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lebih Detail</a>
         </div>
       </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="images/rooms/1.jpg" class="card-img-top">
       <div class="card-body">
        <h5>Standard Room</h5>
         <h6 class="mb-4">Rp 200.000/Malam</h6>
         <div class="features mb-4">
          <h6 class="mb-1">Fitur</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Kamar
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Kamar Mandi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Balkon
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            3 Sofa
          </span>
         </div>
         <div class="facilities mb-4">
          <h6 class="mb-1">Fasilitas</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Televisi
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            AC
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            Cewe Tobrut
          </span>
         </div>
         <div class="guests mb-4">
          <h6 class="mb-1">Tamu</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            5 Dewasa
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            5 Anak-Anak
          </span>
         </div>
         <div class="rating mb-4">
          <h6 class="mb-1">Penilaian</h6>
           <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
           </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Pesan Sekarang</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lebih Detail</a>
         </div>
       </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Lebih Banyak Kamar >>></a>
    </div>
  </div>
 </div>
<!-- Akhir Rooms -->

<!-- Awal Fasilitas -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FASILITAS KAMI</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="50px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/parkir.svg" width="50px">
      <h5 class="mt-3">Parkir Luas</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/resto.svg" width="50px">
      <h5 class="mt-3">Restoran</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/bar.svg" width="50px">
      <h5 class="mt-3">Bar</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Lebih Banyak Fasilitas >>></a>
    </div>
  </div>
</div>
<!-- Akhir Fasilitas -->

<!-- Awal Testimoni -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONI</h2>
<div class="container mt-5">
 <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px">
          <h6 class="m-0 ms-2">Orang Random 1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Soluta ex modi incidunt non velit temporibus rem
          doloribus odit maxime tempore!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/features/star.svg" width="30px">
          <h6 class="m-0 ms-2">Orang Random 1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Soluta ex modi incidunt non velit temporibus rem
          doloribus odit maxime tempore!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/features/star.svg" width="30px">
          <h6 class="m-0 ms-2">Orang Random 1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Soluta ex modi incidunt non velit temporibus rem
          doloribus odit maxime tempore!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<!-- Akhir Testimoni -->

<!-- Awal Lokasi -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LOKASI KAMI</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.283353336473!2d107.586907!3d-6.9758572999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e900010d2d4f%3A0x2ba7f06bd85306ba!2sKomplek%20Batuwangi!5e0!3m2!1sen!2sid!4v1737989233623!5m2!1sen!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Hubungi Kami</h5>
        <a href="tel: +6289612902227" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +6289612902227
        </a>
        <br>
        <a href="tel: +62895334905963" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +62895334905963
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Ikuti Kami</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-tiktok me-1"></i> Tiktok
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Lokasi -->

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>