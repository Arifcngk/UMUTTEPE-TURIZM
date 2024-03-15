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
                        <button type="button" id="swap_cities" class="btn btn-warning w-100"><i class="fa-solid fa-rotate"></i></button>
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
                        <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <style>
            .card {
                min-height: 100px;
                /* Kartların minimum yüksekliği 100px olacak */
            }

            .card-body {
                display: flex;
                /* İçerik öğelerini dikey olarak ortalamak için */
                align-items: center;
                /* İçerik öğelerini dikey olarak ortala */
            }
        </style>

        <div class="container mt-5">
            <?php foreach ($routes as $route) : ?>
                <div class="card mb-4 shadow" style="min-height: 200px;">
                    <div class="card-body">
                        <div class="row w-100">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h5 class="card-text"><?= $route['departure_city'] ?> > <?= $route['arrival_city'] ?></h5>
                            </div>
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <i class="fa-regular fa-clock text-secondary" style="font-size: 24px; margin-right: 4px"></i>
                                <p class="card-text text-secondary font-weight-bold" style="font-size: 24px;"><?= $route['departure_time'] ?></p>
                            </div>
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-couch text-secondary font-weight-bold" style="font-size: 24px; margin-right: 4px"></i>
                                <p class="card-text text-secondary font-weight-bold" style="font-size: 24px;">2+1 Koltuk</p>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center"><!-- yatayda ortalamak için text-center sınıfını ekleyin -->
                                    <h3 class="card-text" style="color: #e43c5c; text-shadow: 0 0 1px #e43c5c;"><b>200 ₺</b></h3>
                                    <a href="seatSelection" class="btn btn-secondary w-100 py-2" style="background-color: #e43c5c; border: none;">Koltuk Seç</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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

    <script></script>
</body>

</html>