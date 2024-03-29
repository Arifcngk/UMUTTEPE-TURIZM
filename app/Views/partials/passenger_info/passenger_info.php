<!-- Yolcu Bilgiileri -->
<div class="card mb-4">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-lg-6">
                <h3 class="h6">Koltuk Numarası <?php echo $passenger['seat_number'] ?>(<?php echo $passenger['gender'] === 'female' ? 'Kadın' : 'Erkek' ?>)</h3>
            </div>
            <div class="col-lg-6">
                <div class="checkbox-wrapper-52">
                    <label for="status[<?php echo $index; ?>]" class="item">
                        <input type="checkbox" id="status[<?php echo $index; ?>]" class="hidden" name="status[<?php echo $index; ?>]" />
                        <label for="status[<?php echo $index; ?>]" class="cbx">
                            <svg width="14px" height="12px" viewBox="0 0 14 12">
                                <polyline points="1 7.6 5 11 13 1"></polyline>
                            </svg>
                        </label>
                        <label for="status[<?php echo $index; ?>]" class="cbx-lbl">Rezerve</label>
                    </label>
                </div>
                <style>
                    .checkbox-wrapper-52 input[type="checkbox"] {
                        visibility: hidden;
                        display: none;
                    }

                    .checkbox-wrapper-52 label {
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font-size: 100%;
                        font: inherit;
                        vertical-align: baseline;
                        line-height: 1;
                    }

                    .checkbox-wrapper-52 *,
                    .checkbox-wrapper-52 ::after,
                    .checkbox-wrapper-52 ::before {
                        box-sizing: border-box;
                    }

                    .checkbox-wrapper-52 .item .cbx {
                        position: relative;
                        top: 1px;
                        display: inline-block;
                        width: 14px;
                        height: 14px;
                        margin-right: 6px;
                        border: 1px solid #c8ccd4;
                        border-radius: 3px;
                        cursor: pointer;
                    }

                    .checkbox-wrapper-52 .item .cbx svg {
                        position: relative;
                        top: -1px;
                        transform: scale(0);
                        fill: none;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                    }

                    .checkbox-wrapper-52 .item .cbx svg polyline {
                        stroke-width: 2;
                        stroke: #18cda6;
                    }

                    .checkbox-wrapper-52 .item .cbx:before {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        margin: -10px 0 0 -10px;
                        width: 20px;
                        height: 20px;
                        border-radius: 100%;
                        background: #18cda6;
                        transform: scale(0);
                    }

                    .checkbox-wrapper-52 .item .cbx:after {
                        content: '';
                        position: absolute;
                        top: 5px;
                        left: 5px;
                        width: 2px;
                        height: 2px;
                        border-radius: 2px;
                        box-shadow: 0 -18px 0 #18cda6, 12px -12px 0 #18cda6, 18px 0 0 #18cda6, 12px 12px 0 #18cda6, 0 18px 0 #18cda6, -12px 12px 0 #18cda6, -18px 0 0 #18cda6, -12px -12px 0 #18cda6;
                        transform: scale(0);
                    }

                    .checkbox-wrapper-52 .item .cbx-lbl {
                        position: relative;
                        cursor: pointer;
                        transition: color 0.3s ease;
                    }

                    .checkbox-wrapper-52 .item .cbx-lbl:after {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 0;
                        width: 0;
                        height: 1px;
                        background: #9098a9;
                    }

                    .checkbox-wrapper-52 .item input {
                        display: none;
                    }

                    .checkbox-wrapper-52 .item input:checked+.cbx {
                        border-color: transparent;
                    }

                    .checkbox-wrapper-52 .item input:checked+.cbx svg {
                        transform: scale(1);
                        transition: all 0.4s ease;
                        transition-delay: 0.1s;
                    }

                    .checkbox-wrapper-52 .item input:checked+.cbx:before {
                        transform: scale(1);
                        opacity: 0;
                        transition: all 0.3s ease;
                    }

                    .checkbox-wrapper-52 .item input:checked+.cbx:after {
                        transform: scale(1);
                        opacity: 0;
                        transition: all 0.6s ease;
                    }

                    .checkbox-wrapper-52 .item input:checked~.cbx-lbl {
                        color: #9098a9;
                    }

                    .checkbox-wrapper-52 .item input:checked~.cbx-lbl:after {
                        width: 100%;
                        transition: all 0.4s ease;
                    }
                </style>

            </div>
        </div>


        <input type="hidden" name="seat_number[<?php echo $index; ?>]" value="<?php echo $passenger['seat_number']; ?>">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" name="passenger_name[<?php echo $index; ?>]" required>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="passenger_surname[<?php echo $index; ?>]" required>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Cinsiyet</label>
                    <input type="text" class="form-control" name="passenger_gender[<?php echo $index; ?>]" readonly value="<?php echo $passenger['gender'] ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Doğum Tarihi</label>
                    <input type="date" class="form-control" name="passenger_birthdate[<?php echo $index; ?>]" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">T.C Kimlik No</label>
                    <input type="number" class="form-control" name="passenger_id_number[<?php echo $index; ?>]" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Yolcu Tarifesi</label>

                    <select class="form-select passenger-discount" name="passenger_discount[<?php echo $index; ?>]" required>
                        <?php foreach ($fares as $fare) : ?>
                            <option value="<?php echo $fare['id']; ?>"><?php echo $fare['fare_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var passengerDiscounts = document.querySelectorAll('.passenger-discount');
        passengerDiscounts.forEach(function(passengerDiscount) {
            passengerDiscount.addEventListener('change', function() {
                var index = this.name.match(/\d+/)[0]; // Yolcu indeksini al
                var fareId = this.value; // Seçilen yolcu tarifesi ID'sini al
                var routeId = <?php echo $route['route_id'] ?>;
                var data = {
                    index: index,
                    fareId: fareId,
                    routeId: routeId
                };
                sendAjax(data);
            });
        });

        function sendAjax(data) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", '<?php echo base_url('update_price'); ?>', true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText); // Yanıtı JSON formatına dönüştür
                    var price = response.price; // Güncellenmiş toplam fiyatı al
                    var index = response.index; // Güncellenmiş yolcu bilgilerini al

                    // Toplam tutarı güncelle
                    document.getElementById('total' + index).textContent = price.toFixed(2) + ' ₺';

                    var prices = document.getElementsByClassName('passengerPrices');
                    var totalPrice = 0;

                    // prices NodeList'ini bir diziye dönüştür ve fiyatları topla
                    Array.prototype.forEach.call(prices, function(priceElement) {
                        totalPrice += parseFloat(priceElement.textContent.replace('₺', '').trim());
                    });
                    var totalElements = document.getElementsByClassName('total');
                    for (var j = 0; j < totalElements.length; j++) {
                        totalElements[j].textContent = totalPrice.toFixed(2) + ' ₺';
                    }

                }
            };
            xhr.send(JSON.stringify(data));
        }
    });
</script>