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
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-couch font-weight-bold" style="font-size: 20px; margin-right: 8px; color: #899dab; text-shadow: 0 0 1px #1d3445;"></i>
                            <p class="card-text font-weight-bold" id="seatLayout" style="font-size: 24px; color: #899dab; text-shadow: 0 0 1px #1d3445;">2+1</p>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center"><!-- yatayda ortalamak için text-center sınıfını ekleyin -->
                                <h3 id="price" class="card-text" style="color: #e43c5c; text-shadow: 0 0 1px #e43c5c;"><b></b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div id="seatMap"></div>
            </div>
            <div class="modal-footer">
                <div class="selectedSeats">
                    <h5 class="font-weight-bold">Seçilen Koltuklar:</h5>
                    <ul id="selectedSeats"></ul>
                </div>
                <div>
                <span style="display: block;" class="text-secondary pb-2">Toplam Fiyat: <h5 style="display: inline;"  id="totalPrice"></h5></span>
                <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close" style="box-shadow: 0 0 5px #1d3445; background-color: #1d3445; border: none;">
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

<script>
    $('#seatModal').on('hidden.bs.modal', function() {
        $('#selectedSeats').empty(); // selectedSeats içeriğini boşalt
        $('#totalPrice').empty();
    });
    // Kapat butonuna tıklanınca modalı kapat
    $('.close').click(function() {
        $('#seatModal').modal('hide');
    });
</script>