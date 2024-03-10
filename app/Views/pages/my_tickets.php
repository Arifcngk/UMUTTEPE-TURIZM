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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-dark p-4 rounded mb-4 text-light">
                        <form action="<?= base_url('searchtickets') ?>" method="get">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="departure_city" class="text-light">Kalkış Şehri:</label>
                                        <select id="departure_city" name="departure_city" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php foreach ($cities as $city) : ?>
                                                <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="arrival_city" class="text-light">Varış Şehri:</label>
                                        <select id="arrival_city" name="arrival_city" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php foreach ($cities as $city) : ?>
                                                <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="departure_date" class="text-light">Kalkış Tarihi:</label>
                                        <input type="date" id="departure_date" name="departure_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Ara</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Bilet listesi -->
            <div class="row">
                <div class="col-lg-12 border rounded">
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