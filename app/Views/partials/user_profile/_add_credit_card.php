<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


<div class="modal fade" id="addCardModal" tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCardModalLabel">Kredi Kartı Bilgileri Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Credit card information form -->
                <form id="creditCardForm">
                    <div class="mb-3">
                        <label for="cardHolderName" class="form-label">Kart Sahibinin Adı</label>
                        <input type="text" class="form-control" id="cardHolderName" name="cardHolderName" placeholder="Kart Sahibinin Adı" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Kart Numarası</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Kart Numarası" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="expirationDate" class="form-label">Son Kullanma Tarihi</label>
                            <input type="text" class="form-control" id="expirationDate" name="expirationDate" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-primary" id="saveCardBtn">Kaydet</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Kaydet butonuna tıklama olayı dinleyicisi ekle
    document.querySelector('#saveCardBtn').addEventListener('click', function() {
        // Form verilerini topla
        var formData = new FormData(document.getElementById('creditCardForm'));

        // AJAX isteği gönder
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url('add_credit_card') ?>', true); // base_url() fonksiyonu burada kullanıldı
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // İşlem başarılı oldu, modalı kapat ve sayfayı yenile
                $('#addCardModal').modal('hide');
                location.reload();
            }
        };
        xhr.send(formData);
    });
</script>
