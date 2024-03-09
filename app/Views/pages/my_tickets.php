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

    <!-- uyarı başlangıç -->
    <?php include "app/Views/partials/_alert.php" ?>
    <!-- uyarı bitiş -->

    <main id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar bg-dark p-4 rounded">
                        <h3 class="text-light mb-4">Filtreler</h3>
                        <!-- Örnek bir tarih aralığı filtresi -->
                        <div class="form-group">
                            <label for="start_date" class="text-light">Başlangıç Tarihi:</label>
                            <input type="date" id="start_date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="text-light">Bitiş Tarihi:</label>
                            <input type="date" id="end_date" name="end_date" class="form-control">
                        </div>
                        <!-- Örnek bir şehir filtresi -->
                        <div class="form-group">
                            <label for="departure_city" class="text-light">Kalkış Şehri:</label>
                            <select id="departure_city" name="departure_city" class="form-control">
                                <?php foreach ($cities as $city) : ?>
                                    <Option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></Option>
                                <?php endforeach; ?>
                                <!-- Diğer şehirlerin seçenekleri buraya eklenebilir -->
                            </select>
                        </div>
                        <!-- Diğer filtreler buraya eklenebilir -->
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="row pt-2">
                        <?php if (empty($tickets)) : ?>
                            <div class="col-12">
                                <h1 class="text-center">Henüz bilet yok.</h1>
                            </div>
                        <?php else : ?>
                            <?php foreach ($tickets as $ticket) : ?>
                                <?php include 'app/Views/partials/_ticket_card.php'; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
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