<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php"?>
    <link href="public/assets/css/buy_ticket.css" rel="stylesheet" />

</head>
<!-- head son -->

<body>

    <!-- navbar başlangıç -->
    <?php include "app/Views/partials/_navbar.php" ?>
    <!-- navbar başlangıç -->

    <?php if (!empty($message)) : ?>
    <div class="alert <?php echo $message['type']; ?>">
        <?php echo $message['text']; ?>
    </div>
    <?php endif; ?>

    <!-- uyarı başlangıç -->
    <?php include "app/Views/partials/_alert.php" ?>
    <!-- uyarı bitiş -->

    <!-- ======= Hero Section ======= -->
    <?php include "app/Views/partials/_hero.php" ?>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Bilet Satın Alma Ekranı ======= -->
        <?php include "app/Views/partials/_buy_ticket.php"?>
        <!-- Bilet Satın Alma Ekranı Kapanış -->

        <!-- ======= Servislerimiz ======= -->
        <?php include "app/Views/partials/_services.php"?>
        <!-- Servislerimiz-Son -->

        <!-- ======= Hızlı Satın Alma  ======= -->
        <?php include "app/Views/partials/_buy_fast.php"?>
        <!-- Hızlı Satın Alma Son -->

        <!-- ======= Hemen Üyel Ol ======= -->
        <?php include "app/Views/partials/_banner.php"?>
        <!-- Hemen Üyel Ol - Son -->

        <!-- ======= Sıkça Sorulan Sorular Kısmı ======= -->
        <?php include "app/Views/partials/_sss.php" ?>
        <!-- Sıkça Sorulan Sorular Kısmı- Son -->

        <!-- ======= İletişim Alanı ======= -->
        <?php include "app/Views/partials/_contact.php"?>
        <!-- İletişim Alanı Son -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "app/Views/partials/_footer.php"?>
    <!--  Footer-Kapanıs -->

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
    <script></script>
</body>

</html>