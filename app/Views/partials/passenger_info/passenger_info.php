<!-- Yolcu Bilgiileri -->
<div class="card mb-4">
    <div class="card-body">
        <h3 class="h6 mb-4">Koltuk Numarası <?php echo $passenger['seat_number'] ?>(<?php echo $passenger['gender'] === 'female' ? 'Kadın' : 'Erkek' ?>)</h3>

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