<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
    <link href="public/assets/css/biletler.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .select-gender {
            display: flex;
            position: absolute;
            top: -20px;
            /* Koltuğun 20px üzerinde */
            left: 0;
            z-index: 1001;
            /* Popup'ı diğer elementlerin üzerine taşır */
        }

        #selectedSeats {
            display: flex;
            gap: 4px;
        }

        #seatModal {
            overflow: auto;
        }

        #seatModal .modal-dialog {
            min-width: 1200px;
        }

        .select-gender .popup-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 5px;
            font-size: 16px;
        }

        .select-gender .popup-button i {
            margin-right: 5px;
        }

        .seat {
            width: 50px;
            height: 50px;
            cursor: pointer;
            background-size: cover;
            display: inline-block;
            position: relative;
            transition: all ease .3s;
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
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .corridor span {
            font-size: 1.5rem;
            color: #899dab;
            font-weight: 700;
            text-align: center;
            opacity: .4;
        }

        .seat.sold {
            background-image: url('public/assets/img/seat_sold.png');
        }

        .seat.empty {
            background-image: url('public/assets/img/seat_empty.png');
        }

        .seat.selected {
            background-image: url('public/assets/img/seat_selected.png');
        }

        .seat.empty:is(:hover, :focus-visible) {
            filter: drop-shadow(0 0 0.75rem #008080);
        }

        .seat.booked {
            background-image: url('public/assets/img/seat_booked.png');
        }

        .seat.booked:is(:hover, :focus-visible) {
            filter: drop-shadow(0 0 0.75rem #ffef00);
        }

        .seat.sold.male {
            background-image: url('public/assets/img/seat_male.png');
        }

        .seat.sold.male:is(:hover, :focus-visible) {
            filter: drop-shadow(0 0 0.75rem #007FFF);
        }

        .seat.sold.female {
            background-image: url('public/assets/img/seat_female.png');
        }

        .seat.sold.female:is(:hover, :focus-visible) {
            filter: drop-shadow(0 0 0.75rem #ff77ff);
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
            $('.show-seats-btn').click(function() {
                var routeId = $(this).data('route-id');

                $.ajax({
                    url: '<?php echo base_url('seats/') ?>' + routeId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        displaySeats(response);
                        showModal(response);
                        addSeatClickHandler();
                        addPopupCloseHandler();
                    },
                    error: function(xhr, status, error) {
                        alert('Koltuklar yüklenirken bir hata oluştu.');
                    }
                });
            });
        });

        function displaySeats(response) {
            var seatHtml = '';
            var seatLayout = response.route[0].seat_layout;
            var seatNumber = (seatLayout === '2+1') ? 3 : 4;

            for (var i = 0; i < seatNumber; i++) {
                seatHtml += '<div class="row">';

                for (var j = i; j < response.seats.length; j += seatNumber) {
                    var seat = response.seats[j];
                    var availability = seat.status;
                    var colorClass = '';

                    switch (availability) {
                        case 'empty':
                            colorClass = 'empty';
                            break;
                        case 'sold':
                            colorClass = 'sold ' + seat.gender;
                            break;
                        case 'booked':
                            colorClass = 'booked';
                            break;
                    }

                    seatHtml += '<div class="col">' +
                        '<div class="seat ' + colorClass + '" data-seat-number="' + seat.seat_number + '">' +
                        seat.seat_number +
                        '</div>' +
                        '</div>';
                }

                seatHtml += '</div>'; // Satır sonu

                if (seatNumber === 3 && i === 1) {
                    seatHtml += '<div class="corridor row"><span>Koridor</span></div>';
                    seatHtml += '<div class="corridor row"><span>Koridor</span></div>';
                } else if (seatNumber === 4 && i === 1) {
                    seatHtml += '<div class="corridor row"><span>Koridor</span></div>';
                }
            }

            $('#seatMap').html(seatHtml);
        }

        function showModal(response) {
            var route = response.route[0];
            var departureCity = route.departure_city;
            var arrivalCity = route.arrival_city;
            var departureTime = route.departure_time;
            var seatLayout = route.seat_layout;
            var price = route.price + "₺";

            $('#departureArrival').html(departureCity + " <i class='fa-solid fa-angles-right' style='font-size: 18px; color: #e43c5c;'></i> " + arrivalCity);
            $('#departureTime').html(departureTime);
            $('#seatLayout').html(seatLayout);
            $('#price').html(price);

            $('#seatModal').modal('show');
        }

        function addSeatClickHandler() {
            $('.seat').off('click').click(function(event) {
                var seatNumber = $(this).data('seat-number');

                if ($(this).hasClass('empty')) {
                    event.stopPropagation();
                    showPopup($(this));
                } else if ($(this).hasClass('selected')) {
                    removeSeatSelection($(this), seatNumber);
                }
            });
        }

        function showPopup(seatElement) {
            var seatNumber = seatElement.data('seat-number');
            var popupHtml = '<div class="popup select-gender ' + seatNumber + '">' +
                '<button id="male" class="popup-button male" value="male"><i class="fa-solid fa-mars"></i> Erkek Seç</button>' +
                '<button id="female" class="popup-button female" value="female"><i class="fa-solid fa-venus"></i> Kadın Seç</button>' +
                '</div>';

            $('.popup').remove();
            seatElement.append(popupHtml);

            $('.popup-button').off('click').click(function(event) {
                event.stopPropagation();
                var selectedGender = $(this).attr('id');
                var selectedSeatsCount = $('#selectedSeats li').length;

                if (selectedSeatsCount >= 4) {
                    alert('Daha fazla koltuk ekleyemezsiniz.');
                    return;
                }

                $(this).parent().parent().addClass('selected').removeClass('empty');
                var seat = '<li class="list-group-item"><div class="col">' +
                    '<div class="seat sold ' + selectedGender + '" data-seat-number="' + seatNumber + '">' +
                    seatNumber +
                    '</div>' +
                    '</div></li>';

                $('#selectedSeats').append(seat);
                $('#totalPrice').html((selectedSeatsCount + 1) * parseFloat($('#price').text()));
                $(this).closest('.popup').remove();

                console.log('Koltuk Numarası:', seatNumber);
                console.log('Seçilen Cinsiyet:', selectedGender);

                // İki ardışık koltuğun cinsiyet kontrolü
                var adjacentSeats = $('.seat[data-seat-number="' + seatNumber + '"]').next();
                if (adjacentSeats.length > 0) {
                    var adjacentSeatGender = adjacentSeats.attr('class').split(' ')[1];
                    if (adjacentSeatGender === selectedGender) {
                        alert("Yan yana iki koltuk aynı cinsiyet olamaz!");
                        removeSeatSelection(seatElement, seatNumber);   
                    }
                }
            });
        }

        function removeSeatSelection(seatElement, seatNumber) {
            var selectedSeatsCount = $('#selectedSeats li').length;
            selectedSeatsCount--;
            console.log(selectedSeatsCount);
            $('#totalPrice').html(selectedSeatsCount * parseFloat($('#price').text()));
            seatElement.removeClass('selected').addClass('empty');
            $('#selectedSeats li div[data-seat-number="' + seatNumber + '"]').parent().parent().remove();
        }

        function addPopupCloseHandler() {
            $(document).off('click.popup').on('click.popup', function() {
                $('.popup').remove();
            });
        }
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