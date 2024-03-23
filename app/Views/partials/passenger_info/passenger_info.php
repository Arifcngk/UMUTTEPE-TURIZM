<!-- Yolcu Bilgiileri -->
<div class="card mb-4">
    <div class="card-body">
        <h3 class="h6 mb-4">Koltuk Numarası <?php echo $passenger['seat_number'] ?>(<?php echo $passenger['gender'] === 'female' ? 'Kadın' : 'Erkek' ?>)</h3>


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
                    <select class="form-select" name="passenger_gender[<?php echo $index; ?>]" required>
                        <option value="" selected disabled>Seçiniz</option>
                        <option value="male">Erkek</option>
                        <option value="female">Kadın</option>
                    </select>
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
                        <option selected value="standart">Standart</option>
                        <option value="student">Öğrenci - %15 İndirim</option>
                        <option value="officer">Memur - %15 İndirim</option>
                        <option value="retired">Emekli - %15 İndirim</option>
                        <option value="senior">65 Yaş Üstü -%50 İndirim</option>
                        <option value="child">7 Yaş Altı - Ücretsiz</option>
                        <option value="security">Güvenlik Mensubu - Ücretsiz</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Yolcu tarifesi değiştikçe fiyat kısmını güncelle
    document.addEventListener("DOMContentLoaded", function() {
        var passengerDiscounts = document.querySelectorAll('.passenger-discount');
        passengerDiscounts.forEach(function(passengerDiscount) {
            passengerDiscount.addEventListener('change', function() {
                var index = this.name.match(/\d+/)[0]; // Yolcu indeksini al
                var totalPriceElement = document.getElementById('total' + index);
                var totalPrice = parseFloat(document.getElementById('total').textContent) / passengerDiscounts.length; // Toplam fiyatı al
                switch (this.value) {
                    case 'student':
                    case 'officer':
                    case 'retired':
                        totalPrice *= 0.85; // %15 indirim
                        break;
                    case 'senior':
                        totalPrice *= 0.50; // %50 indirim
                        break;
                    case 'child':
                    case 'security':
                        totalPrice = 0; // Ücretsiz
                        break;
                    default:
                        break;
                }
                totalPriceElement.textContent = totalPrice.toFixed(2) + ' ₺';
            });
        });
    });
</script>