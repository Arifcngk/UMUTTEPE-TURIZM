<!DOCTYPE html>
<html lang="tr">

<head>
    <?php include "app/Views/partials/_head.php" ?>
</head>

<body>

    <?php include "app/Views/partials/_navbar.php" ?>

    <?php if (!empty($message)) : ?>
    <div class="alert <?php echo $message['type']; ?>">
        <?php echo $message['text']; ?>
    </div>
    <?php endif; ?>

    <main id="main" class="pb-4"> 
    <section class="container pb-4">
<h1>Biletlerim </h1>
  <div class="row">
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span>23</span><span>Mart</span>
        </time>
      </section>
      <section class="card-cont">
        <small>Bilet Sahibi:</small>
        <h3 style="color: black;"><b>Arif Can Gök</b></h3>
        <div class="even-date">
         <i class="fa fa-calendar" ></i>
        
           <p style="color: black;"><span>  23 Mart 2024</span>
           <span>  08:55  kalkış 12:00 varış</span></p>
        
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Kocaeli Otogar --> Sakarya Otogar 
          </p>
        </div>
        
        <a href="#" style="background-color: black;">tickets</a>
      </section>
    </article>
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span>23</span><span>Mart</span>
        </time>
      </section>
      <section class="card-cont">
        <small>Bilet Sahibi:</small>
        <h3 style="color: black;"><b>Arif Can Gök</b></h3>
        <div class="even-date">
         <i class="fa fa-calendar" ></i>
        
           <p style="color: black;"><span>  23 Mart 2024</span>
           <span>  08:55  kalkış 12:00 varış</span></p>
        
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Kocaeli Otogar --> Sakarya Otogar 
          </p>
        </div>
        
        <a href="#" style="background-color: black;">tickets</a>
      </section>
    </article>
  </div>
  <div class="row">
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span>23</span><span>Mart</span>
        </time>
      </section>
      <section class="card-cont">
        <small>Bilet Sahibi:</small>
        <h3 style="color: black;"><b>Arif Can Gök</b></h3>
        <div class="even-date">
         <i class="fa fa-calendar" ></i>
        
           <p style="color: black;"><span>  23 Mart 2024</span>
           <span>  08:55  kalkış 12:00 varış</span></p>
        
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Kocaeli Otogar --> Sakarya Otogar 
          </p>
        </div>
        
        <a href="#" style="background-color: black;">tickets</a>
      </section>
    </article>
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span>23</span><span>Mart</span>
        </time>
      </section>
      <section class="card-cont">
        <small>Bilet Sahibi:</small>
        <h3 style="color: black;"><b>Arif Can Gök</b></h3>
        <div class="even-date">
         <i class="fa fa-calendar" ></i>
        
           <p style="color: black;"><span>  23 Mart 2024</span>
           <span>  08:55  kalkış 12:00 varış</span></p>
        
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Kocaeli Otogar --> Sakarya Otogar 
          </p>
        </div>
        
        <a href="#" style="background-color: black;">tickets</a>
      </section>
    </article>
  </div>
  
</section>
</main>



    <?php include "app/Views/partials/_footer.php" ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="public/assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="public/assets/js/main.js"></script>
</body>

</html>