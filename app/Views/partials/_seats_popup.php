<div class="modal fade" id="seatModal" tabindex="-1" role="dialog" aria-labelledby="seatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="row w-100">
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <h5 id="departureArrival" class="card-text text-secondary font-weight-bold" style="font-size: 24px;"></h5>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-clock" style="font-size: 24px; margin-right: 4px; color: #1d3445; text-shadow: 0 0 1px #e43c5c; color: #e43c5c;"></i>
                            <p id="departureTime" class="card-text text-secondary font-weight-bold" style="font-size: 24px; color: #1d3445; text-shadow: 0 0 1px #1d3445;"></p>
                        </div>
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-couch font-weight-bold" style="font-size: 20px; margin-right: 8px; color: #899dab; text-shadow: 0 0 1px #1d3445;"></i>
                            <p class="card-text font-weight-bold" id="seatLayout" style="font-size: 24px; color: #899dab; text-shadow: 0 0 1px #1d3445;">2+1</p>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center"><!-- yatayda ortalamak için text-center sınıfını ekleyin -->
                                <h3 id="price" class="card-text" style="color: #e43c5c; text-shadow: 0 0 1px #e43c5c;"><b></b></h3>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center"><!-- yatayda ortalamak için text-center sınıfını ekleyin -->
                                <h3 id="routeId" class="card-text" style="color: #e43c5c; text-shadow: 0 0 1px #e43c5c; opacity: .3;"><b></b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="map">
                    <h2 id="showMapText" class="text-secondary" style="cursor: pointer;">Haritayı Göster</h2>
                    <div id="mapContainer"></div>
                    <hr>
                </div>
                <div class="trivia m-4" style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                    <div class="trivia-block d-flex align-items-center justify-content-center">
                        <div class="seat sold"></div>
                        <h6>Satın Alınamaz</h6>
                    </div>
                    <div class="trivia-block d-flex align-items-center justify-content-center">
                        <div class="seat empty"></div>
                        <h6>Uygun Koltuk</h6>
                    </div>
                    <div class="trivia-block d-flex align-items-center justify-content-center">
                        <div class="seat reserved"></div>
                        <h6>Rezerve Koltuk</h6>
                    </div>
                    <div class="trivia-block d-flex align-items-center justify-content-center">
                        <div class="seat sold female"></div>
                        <h6>Kadın Yolcu</h6>
                    </div>
                    <div class="trivia-block d-flex align-items-center justify-content-center">
                        <div class="seat sold male"></div>
                        <h6>Erkek Yolcu</h6>
                    </div>
                </div>
                <div class="bus" style="display: flex;">
                    <img src="public/assets/img/bus-front.png" alt="bus front">
                    <div style="width: 100%; padding: 4px; border: 2px solid #ccc; border-left: none;" id="seatMap"></div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="selectedSeats">
                    <h5 class="font-weight-bold">Seçilen Koltuklar:</h5>
                    <ul id="selectedSeats"></ul>
                </div>
                <div>
                    <span style="display: block;" class="text-secondary pb-2">Toplam Fiyat: <h5 style="display: inline;" id="totalPrice"></h5></span>
                    <button disabled id="confirmButton" type="button" class="btn btn-primary" aria-label="Accept" style="box-shadow: 0 0 5px #1d3445; background-color: #1d3445; border: none;">
                        Onayla ve Devam Et
                    </button>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close" style="box-shadow: 0 0 5px #e43c5c; background-color: #e43c5c; border: none; position: fixed; right: 16px; top: 16px;">
        <i class="fa-solid fa-xmark"></i>
    </button>
</div>

<style>
    #mapContainer {
        /* Harita alanını stilize etmek için CSS */
        height: 200px;
        width: 100%;
        display: none;
        padding-bottom: 24px;
        border: #ccc solid 2px;
        border-radius: 18px;
        overflow: hidden;
        /* veya belirli bir piksel değeri */
    }

    .selectedSeats {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>

<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" /> -->
<script>
    $('#seatModal').on('hidden.bs.modal', function() {
        $('#showMapText').text('Haritayı Göster');
        document.getElementById('mapContainer').style.display = 'none';
        $('#mapContainer').empty();
        $('#selectedSeats').empty(); // selectedSeats içeriğini boşalt
        $('#totalPrice').empty();
    });
    // Kapat butonuna tıklanınca modalı kapat
    $('.close').click(function() {
        $('#seatModal').modal('hide');
    });

    $(document).ready(function() {
        $('#confirmButton').click(function() {
            // Seçilen koltuk bilgilerini al
            var selectedSeats = [];
            $('#selectedSeats li').each(function() {
                var seatNumber = $(this).find('.seat').data('seat-number');
                var gender = $(this).find('.seat').hasClass('female') ? 'female' : 'male';
                selectedSeats.push({
                    seat_number: seatNumber,
                    gender: gender
                });
            });

            // Toplam fiyatı al
            var totalPrice = $('#totalPrice').text();

            // Route ID bilgisini al
            var routeId = $('#routeId').text();

            // Formu oluştur ve bilgileri ekle
            var form = $('<form action="<?php echo base_url('passengerinfo'); ?>" method="post">' +
                '<input type="hidden" name="selectedSeats" value=\'' + JSON.stringify(selectedSeats) + '\'>' +
                '<input type="hidden" name="totalPrice" value="' + totalPrice + '">' +
                '<input type="hidden" name="routeId" value="' + routeId + '">' +
                '</form>');

            // Formu sayfaya ekleyerek otomatik olarak submit et
            $('body').append(form);
            form.submit();
        });
    });
</script>