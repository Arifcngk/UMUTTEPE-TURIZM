<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/assets/css/passenger_info.css" rel="stylesheet" />
    <link href="public/assets/css/style.css" rel="stylesheet" />



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
        <div class="container-fluid">

            <div class="container">
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Koltuk Seçme Ekranına Dön</h2>
                    <h2 style="color: #e43c5c; text-shadow: 0 0 2px #e43c5c;"><?php echo $route['departure_city'] . " > " . $route['arrival_city'] ?></h2>
                </div>
                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- İletişim Bilgieri -->
                        <form action="">
                            <?php include "app/Views/partials/passenger_info/contact_info.php" ?>
                            <?php foreach ($passengers as $index => $passenger) {
                                include "app/Views/partials/passenger_info/passenger_info.php";
                            }
                            ?>
                            <div class="row pb-5">
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <h2 class="total"><?php echo $totalPrice; ?> ₺</h2>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-dark w-100">Tutarı Onayla</button>
                                </div>
                            </div>

                        </form>
                        <!-- Yolcu Bilgiileri -->
                    </div>
                    <!-- Right side -->
                    <div class="col-lg-4">
                        <!-- Son Durum -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="register" style="text-align: center;">
                                    <div id="ticket">
                                        <table>
                                            <?php foreach ($passengers as $index => $passenger) : ?>
                                                <tr>
                                                    <th><?php echo $index + 1; ?>. Yolcu</th>
                                                    <th class="passengerPrices" id="total<?php echo $index; ?>"><?php echo $totalPrice / count($passengers); ?> ₺</th>
                                                </tr>
                                            <?php endforeach; ?>

                                            <tbody id="entries"></tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>Toplam Tutar</th>
                                                    <th class="total"><?php echo $totalPrice; ?> ₺</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Ödeme Bilgileri -->
                        <?php include "app/Views/partials/passenger_info/payment_info.php" ?>
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
    <script src="public/assets/js/main.js"></script>

    <script src="https://use.fontawesome.com/782caa4c45.js"></script>
</body>

<style>
</style>

</html>