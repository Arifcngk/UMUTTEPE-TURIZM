<!-- Yolcu Bilgiileri -->
<div class="card mb-4">
    <div class="card-body">
        <h3 class="h6 mb-4">Koltuk Numarası <?php echo $passenger['seat_number'] ?>(<?php echo $passenger['gender'] === 'female' ? 'Kadın': 'Erkek'?>)</h3>


        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" name="passenger_name[]" required>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="passenger_surname[]" required>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Cinsiyet</label>
                    <select class="form-select" name="passenger_gender[]" required>
                        <option value="" selected disabled>Seçiniz</option>
                        <option value="male">Erkek</option>
                        <option value="female">Kadın</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Doğum Tarihi</label>
                    <input type="date" class="form-control" name="passenger_birthdate[]" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">T.C Kimlik No</label>
                    <input type="number" class="form-control" name="passenger_id_number[]" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Yolcu Tarifesi</label>

                    <select class="form-select" name="passenger_discount[]" required>
                        <option value="" selected disabled>Seçiniz</option>
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
