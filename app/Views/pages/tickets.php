<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
    <link href="public/assets/css/biletler.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #seatModal .modal-dialog {
            max-width: 1200px;
        }

        .seat {
            width: 50px;
            height: 50px;
            background-size: cover;
            display: inline-block;
            position: relative;
        }

        .seat .seat-number {
            position: absolute;
            top: 5px;
            left: 5px;
            color: red;
        }

        .corridor {
            width: 50px;
            height: 50px;
        }

        .seat.sold {
            background-image: url('public/assets/img/seat_sold.png');
        }

        .seat.empty {
            background-image: url('public/assets/img/seat_empty.png');
        }

        .seat.booked {
            background-image: url('public/assets/img/seat_booked.png');
        }

        .seat.sold.male {
            background-image: url('public/assets/img/seat_male.png');
        }

        .seat.sold.female {
            background-image: url('public/assets/img/seat_female.png');
        }
    </style>
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
                <div class="row justify-content-center">
                    <div class="col-md-3 d-flex align-items-center">
                        <select id="departure_city" name="departure_city" class="form-control text-secondary">
                            <option value="">Başlangıç Yeri Seçiniz</option>
                            <?php foreach ($cities as $city) : ?>
                                <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                            <?php endforeach; ?>
                            <!-- Başlangıç yerleri buraya eklenecek -->
                        </select>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-center my-1">
                        <button type="button" id="swap_cities" class="btn btn-secondary" style="background-color: #1d3445; min-width: 50px; "><i class="fa-solid fa-rotate"></i></button>
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
                    <div class="col-md-3 d-flex align-items-center my-1">
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
                    <div class="col-md-1 my-2 d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn text-light" style="background-color: #899dab; min-width: 75px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container mt-5">
            <div class="row">
                <?php foreach ($routes as $route) : ?>
                    <?php include "app/Views/partials/_route_card.php" ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php include "app/Views/partials/_seats_popup.php" ?>
    </main>

    <script>
        $(document).ready(function() {
            // Koltuk seç butonuna tıklandığında
            $('.show-seats-btn').click(function() {
                // Seferin ID'sini al
                var routeId = $(this).data('route-id');
                // AJAX isteği ile koltukları yükle
                $.ajax({
                    url: '<?php echo base_url('seats/') ?>' + routeId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        var seatHtml = '';
                        var seatNumber = response.seat_layout === '2+1' ? 3 : 4; // Koltuk düzenine göre koltuk sayısını belirle

                        // Her bir sütun için döngü
                        for (var i = 0; i < seatNumber; i++) {
                            seatHtml += '<div class="row">';
                            // Her bir sıra için döngü
                            for (var j = i; j < response.seats.length; j += seatNumber) {
                                var availability = response.seats[j].status;
                                var colorClass = '';

                                // Duruma göre renk sınıfını belirle
                                switch (availability) {
                                    case 'empty':
                                        colorClass = 'empty';
                                        break;
                                    case 'sold':
                                        colorClass = 'sold';
                                        break;
                                    case 'booked':
                                        colorClass = 'booked';
                                        break;
                                    default:
                                        colorClass = '';
                                }

                                seatHtml += '<div class="col">' +
                                    '<div class="seat ' + colorClass + '">' +
                                    response.seats[j].seat_number +
                                    '</div>' +
                                    '</div>';
                            }
                            seatHtml += '</div>'; // Satır sonu
                            if (response.seat_layout === '2+1' && i === 1) {
                                seatHtml += '<div class="corridor row"></div>';
                                seatHtml += '<div class="corridor row"></div>';
                            } else if (response.seat_layout === '2+2' && i === 1) {
                                seatHtml += '<div class="corridor row"></div>';
                            }
                        }

                        $('#seatMap').html(seatHtml);
                        $('#seatModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        alert('Koltuklar yüklenirken bir hata oluştu.');
                    }
                });

            });
        });
    </script>
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