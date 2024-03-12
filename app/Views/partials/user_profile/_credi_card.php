<!-- Ödeme Bilgileri Formu -->
<div id="payment_info" class="card shadow border-0 mt-4" style="display: none;">
    <div class="card-body">
        <h2 class="h4 mb-4">Ödeme Bilgileri</h2>
        <form>
            <div class="mb-3">
                <label for="card_number" class="form-label">Kredi Kartı Numarası</label>
                <input type="text" class="form-control" id="card_number" placeholder="Kredi Kartı Numaranızı Girin">
            </div>
            <div class="mb-3">
                <label for="expiry_date" class="form-label">Son Kullanma Tarihi</label>
                <input type="text" class="form-control" id="expiry_date" placeholder="MM/YY">
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="CVV Numaranızı Girin">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
</div>
