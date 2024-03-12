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
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">

            <!-- Main content -->
            <div class="h-screen flex-grow-1 overflow-y-lg-auto">
                <!-- Header -->
                <header class="bg-surface-primary border-bottom pt-6">
                    <div class="container-fluid">
                        <div class="mb-npx">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                    <!-- Title -->
                                    <h1 class="h2 mb-0 ls-tight">Hesabım</h1>
                                </div>
                                <!-- Nav -->
                                <div class="col-sm-6 col-12">
                                    <ul class="nav nav-tabs mt-3 overflow-x border-0 d-flex justify-content-center">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active" data-target="profile">Profil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link font-regular" data-target="payment_info">Ödeme
                                                Bilgileri</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link font-regular" data-target="file_requests">File
                                                requests</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>

                <!-- Profil -->
                <?php include "app/Views/partials/user_profile/_profil.php" ?>
                <!-- Ödeme Bilgileri Formu -->
                <?php include "app/Views/partials/user_profile/_credi_card.php" ?>

            </div>
        </div>
    </main>

<script>document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll('.nav-link');

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