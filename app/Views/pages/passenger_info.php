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
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                                class="bi bi-arrow-left-square me-2"></i></a> Koltuk Seçme Ekranına Dön</h2>
                    
                </div>

                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- İletişim Bilgieri -->
                        <?php include "app/Views/partials/passenger_info/contact_info.php" ?>

                        <!-- Yolcu Bilgiileri -->
                        <?php include "app/Views/partials/passenger_info/passenger_info.php" ?>

                    </div>
                    <!-- Right side -->
                    <div class="col-lg-4">
                        <!-- Son Durum -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="register">
                                    <div id="ticket">

                                        <table>

                                            <tr>
                                                <th>1. Yolcu</th>
                                                <th id="total">120.00 ₺</th>
                                            </tr>
                                            <tr>
                                                <th>2. Yolcu</th>
                                                <th id="total">120.00 ₺</th>
                                            </tr>

                                            <tbody id="entries">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Toplam Tutar</th>
                                                    <th id="total">240.00 ₺</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Bilet Bilgileri -->
                        <?php include "app/Views/partials/passenger_info/ticket_info.php" ?>

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
    <script src="public/assets/js/main.js"></script>

    <script src="https://use.fontawesome.com/782caa4c45.js"></script>

    <script></script>
</body>

</html>