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
               
                <?php include "app/Views/partials/user_form/user_categories.php" ?>
                <!-- Kategori Menüsü Kapanıs -->
                <div class="col-md-9">
                    <!-- Kullanıcı Profili Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_profile.php" ?>
                    
                    <!-- Kullanıcı Profili Kapanıs -->

                    <!-- Ödeme Bilgileri Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_credit_card.php" ?>
                    <!-- Ödeme Bilgileri Kapanıs -->

                    <!-- Sifre Degistir Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_password_update.php" ?>
                    <!-- Sifre Degistir Kapanıs -->


                    <!-- Hesabi Sil Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_delete.php" ?>
                    <!-- Hesabı Sil Kapanıs -->

                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll('.list-group-item');

        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Remove active class from all list items
                menuItems.forEach(function(menuItem) {
                    menuItem.classList.remove('active');
                });

                // Add active class to the clicked list item
                this.classList.add('active');

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

<!-- kredi kartı js -->
<script>
    
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