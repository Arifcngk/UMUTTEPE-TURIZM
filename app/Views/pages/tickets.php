<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
    <link href="public/assets/css/biletler.css" rel="stylesheet" />


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
            <?php include "app/Views/partials/_banner_large.php" ?>
            <form action="tickets/search" method="GET">
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center">
                        <select id="departure_city" name="departure_city" class="form-control text-secondary">
                            <option value="">Başlangıç Yeri Seçiniz</option>
                            <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                            <?php endforeach; ?>
                            <!-- Başlangıç yerleri buraya eklenecek -->
                        </select>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-center">
                        <button type="button" id="swap_cities" class="btn btn-warning w-100"><i
                                class="fa-solid fa-rotate"></i></button>
                        <script>
                        document.getElementById('swap_cities').addEventListener('click', function() {
                            var departureCity = document.getElementById('departure_city').value;
                            var arrivalCity = document.getElementById('arrival_city').value;

                            // Değişkenleri takas et
                            document.getElementById('departure_city').value = arrivalCity;
                            document.getElementById('arrival_city').value = departureCity;
                        });
                        </script>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <select id="arrival_city" name="arrival_city" class="form-control text-secondary">
                            <option value="">Varış Yeri Seçiniz</option>
                            <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                            <?php endforeach; ?>
                            <!-- Varış yerleri buraya eklenecek -->
                        </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <input type="date" id="departure_date" name="departure_date" class="form-control">
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-primary w-100"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
        </div>



    </main>

    <div class="ticket mt-5">
        <div class="event-cards">
            <div class="event-card">
                <div class="date-box">
                    <div class="date">
                        23
                        <div class="month">
                            Mart
                        </div>
                    </div>
                </div>

                <div class="event-body">
                    <div class="event-name">
                        KOCAELİ > DÜZCE
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col">
                            <div class="location">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 00.45 KALKIŞ
                            </div>
                        </div>
                        <div class="col">
                            <div class="location">
                                <i class="fa fa-clock-o 2x" aria-hidden="true"></i> 2+1 Koltuk
                            </div>
                        </div>
                        <div class="col">
                            <div class="location">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 3 Saat 45dk varış
                            </div>
                        </div>
                    </div>


                    <div class="event-price">
                        <div class="child">
                            <div class="tooltiptext">Child</div>
                            <i class="fa fa-child" aria-hidden="true"></i> $15.00
                        </div>
                        <div class="adult">
                            <div class="tooltiptext">Adult</div>
                            <i class="fa fa-male" aria-hidden="true"></i> $35.00
                        </div>
                    </div>
                </div>
               

            </div>



        </div>
    </div>



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
    <script src="https://use.fontawesome.com/782caa4c45.js"></script>
    <script></script>
</body>

</html>