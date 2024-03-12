<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
    <link href="public/assets/css/user_profile.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


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
    <main id="main">
        <!-- Profil Banner  -->
        <?php include "app/Views/partials/user_profile/_user_banner.php" ?>
        <!-- Profil -->
        <?php include "app/Views/partials/user_profile/_profil.php" ?>
        <!-- Ödeme Bilgileri Formu -->
        <?php include "app/Views/partials/user_profile/_credi_card.php" ?>
        <!-- Parola Ayarları Formu -->
        <?php include "app/Views/partials/user_profile/user_password_update.php" ?>


    </main>

    <script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     const menuItems = document.querySelectorAll('.nav-link');

    //     menuItems.forEach(function(item) {
    //         item.addEventListener('click', function() {
    //             // Tüm menü öğelerinden aktiflik sınıfını kaldır
    //             menuItems.forEach(function(item) {
    //                 item.classList.remove('active');
    //             });

    //             // Tıklanan menü öğesine aktiflik sınıfını ekle
    //             this.classList.add('active');

    //             const target = this.getAttribute('data-target');
    //             const forms = document.querySelectorAll('.card');
    //             forms.forEach(function(form) {
    //                 if (form.id === target) {
    //                     form.style.display = 'block';
    //                 } else {
    //                     form.style.display = 'none';
    //                 }
    //             });
    //         });
    //     });
    // });
    </script>




    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "app/Views/partials/_footer.php" ?>
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