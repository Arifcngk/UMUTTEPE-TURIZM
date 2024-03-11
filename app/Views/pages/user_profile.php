<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>


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
        <div class="container mt-5">
            <div class="row">
                <!-- Kategori Menüsü -->
                <?php include "app/Views/partials/user_form/user_categories.php"?>
                <!-- Kategori menüsü Kapanıs -->

                <div class="col-md-9">
                    <!-- kullanıcı profili baslangıc -->
                    <?php include "app/Views/partials/user_form/user_profile.php" ?>
                    <!-- kullanıcı profili kapanıs -->

                    <!-- kullanıcı profili sifre degistirme baslangıc -->
                    <?php include "app/Views/partials/user_form/user_credit_card.php" ?>
                    <!-- kullanıcı profili sifre degistirme kapanıs -->

                    <!-- kullanıcı profili sifre degistirme baslangıc -->
                    <?php include "app/Views/partials/user_form/user_password_update.php" ?>
                    <!-- kullanıcı profili sifre degistirme kapanıs -->

                    <!-- kullanıcı profili silme baslangıc -->
                    <?php include "app/Views/partials/user_form/user_delete.php" ?>
                    <!-- kullanıcı profili sifre degistirme kapanıs -->

                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll('.list-group-item');

        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                const cards = document.querySelectorAll('.card');
                cards.forEach(function(card) {
                    if (card.id === target) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
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