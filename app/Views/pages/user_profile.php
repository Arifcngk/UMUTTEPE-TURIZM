<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
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
        <div class="container mt-5">
            <div class="row">
                <!-- Kategori Menüsü -->
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" data-target="profilim">Profilim</a>
                        <a href="#" class="list-group-item list-group-item-action" data-target="sifre-degistir">Şifre Değiştir</a>
                        <a href="#" class="list-group-item list-group-item-action" data-target="hesabi-sil">Hesabı Sil</a>
                    </div>
                </div>
                <!-- Kullanıcı Profili ve Şifre Değiştirme Formu -->
                <div class="col-md-9">
                    <div id="profilim" class="card">
                        <div class="card-header">
                            Profilim
                        </div>
                        <div class="card-body">
                            <!-- Profil Formu -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Ad</label>
                                    <input type="text" class="form-control" id="firstName" value="Mehmet" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Soyad</label>
                                    <input type="text" class="form-control" id="lastName" value="Sezer" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Adres</label>
                                    <input type="email" class="form-control" id="email" value="john@example.com" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Telefon Numarası</label>
                                    <input type="text" class="form-control" id="phone" value="+1234567890" readonly>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Doğum Tarihi</label>
                                <input type="date" class="form-control" id="birthdate" value="2001-01-01" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Adres</label>
                                <textarea class="form-control" id="address" rows="3" readonly>123 Street, City, Country</textarea>
                            </div>
                            <a href="#" class="btn btn-primary">Bilgilerimi Kaydet</a>
                        </div>
                    </div>
                    <div id="sifre-degistir" class="card mt-3" style="display: none;">
                        <div class="card-header">
                            Parola Değiştir
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Eski Parola</label>
                                <input type="password" class="form-control" id="oldPassword" placeholder="Eski parolanızı girin">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Yeni Parola</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="Yeni parola belirleyin">
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPassword" class="form-label">Yeni Parolayı Onayla</label>
                                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Yeni parolayı tekrar girin">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Şifreyi Değiştir</button>
                            </div>
                        </div>
                    </div>
                    <div id="hesabi-sil" class="card mt-3" style="display: none;">
                        <div class="card-header">
                            Hesabı Sil
                        </div>
                        <div class="card-body">
                            <!-- Hesap Silme Formu -->
                            <!-- ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuItems = document.querySelectorAll('.list-group-item');

            menuItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    const target = this.getAttribute('data-target');
                    const cards = document.querySelectorAll('.card');
                    cards.forEach(function(card) {
                        if (card.id === target) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
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
    <script></script>
</body>

</html>