<?php
require "libs/varibles.php";
require "libs/funtions.php";

?>
<!DOCTYPE html>
<html lang="en">

<!-- head başlangıc -->
<head>
     <?php include "partials/_head.php"?>
</head>
<!-- head son -->

<body>
    
    <!-- navbar başlangıç -->
    <?php include "partials/_navbar.php" ?>
    <!-- navbar başlangıç -->

    <!-- ======= Hero Section ======= -->
    <?php include "partials/_hero_section.php" ?>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Bilet Satın Alma Ekranı ======= -->
        <?php include "partials/_bilet_satin_al.php"?>
        <!-- Bilet Satın Alma Ekranı Kapanış -->

        <!-- ======= Servislerimiz ======= -->
        <?php include "partials/_servislerimiz.php"?>
        <!-- Servislerimiz-Son -->

        <!-- ======= Hızlı Satın Alma  ======= -->
        <?php include "partials/_hizli_satin_al.php"?>
        <!-- Hızlı Satın Alma Son -->

        <!-- ======= Hemen Üyel Ol ======= -->
        <?php include "partials/_banners.php"?>
        <!-- Hemen Üyel Ol - Son -->

        <!-- ======= Sıkça Sorulan Sorular Kısmı ======= -->
       <?php include "partials/_sss.php" ?>
        <!-- Sıkça Sorulan Sorular Kısmı- Son -->

        <!-- ======= İletişim Alanı ======= -->
       <?php include "partials/_iletisim.php"?>
        <!-- İletişim Alanı Son -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "partials/_footer.php"?>
    <!--  Footer-Son -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script>
    document
        .querySelector("#show-login")
        .addEventListener("click", function() {
            document.querySelector(".popup").classList.add("active");
        });
    document
        .querySelector(".popup .close-btn")
        .addEventListener("click", function() {
            document.querySelector(".popup").classList.remove("active");
        });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>