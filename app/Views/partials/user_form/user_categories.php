<!-- Kategori Menüsü -->
<div class="col-md-3">
    <div class="list-group">



        <a href="#" class="list-group-item list-group-item-action active text-center"
            data-target="profilim">Profilim</a>
        <a href="#" class="list-group-item list-group-item-action  text-center" data-target="odeme-bilgiler">Ödeme
            Bilgilerim</a>
        <a href="#" class="list-group-item list-group-item-action text-center" data-target="sifre-degistir">Şifre
            Güncelleme</a>
        <a href="#" class="list-group-item list-group-item-action text-center" data-target="hesabi-sil">Hesabımı
            Sil</a>
    </div>
</div>

<!-- Kategori Menüsü Kapanıs -->
<script>
// Tüm menü öğelerini seç
var menuItems = document.querySelectorAll('.list-group-item');

// Her bir menü öğesi için click olayını dinle
menuItems.forEach(function(item) {
    item.addEventListener('click', function() {
        // Tüm menü öğelerinden active sınıfını kaldır
        menuItems.forEach(function(item) {
            item.classList.remove('active');
        });
        // Tıklanan menü öğesine active sınıfını ekle
        this.classList.add('active');
    });
});
</script>
