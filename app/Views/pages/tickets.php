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
        <div class="container">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form class="search-form trn-search-bar" action="/otobus-bileti/otobus-arama" method="post" id="bus-trip-search-form">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="bus_trip_origin" value="İzmit (Kocaeli) - (İzmit (Kocaeli))" placeholder="Nereden?" readonly>
                                    <input type="hidden" name="bus_trip_origin_slug" value="kocaeli-izmit">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="bus_trip_destination" value="İstanbul Avrupa - (İstanbul)" placeholder="Nereye?" readonly>
                                    <input type="hidden" name="bus_trip_destination_slug" value="istanbul-avrupa-bolgesi">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="fromdate" readonly placeholder="Gidiş Tarihi">
                                    <input type="hidden" name="bus_trip_departure_date" value="2024-03-07">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <button class="btn btn-outline-secondary btn-block" type="button">Bugün</button>
                                    <button class="btn btn-outline-secondary btn-block" type="button">Yarın</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button type="button" class="btn btn-primary btn-block" id="btnBusTripSearch">Ara</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "app/Views/partials/_footer.php" ?>
    <!--  Footer-Kapanıs -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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