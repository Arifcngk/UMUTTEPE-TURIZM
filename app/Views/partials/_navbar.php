<!-- ======= Header ======= -->
<header id="header" class="fixed-top   <?php if ($title != 'Anasayfa') echo 'header-inner-pages' ?> ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="#">Umuttepe Turizm</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto <?php if ($title == 'Anasayfa') echo 'active' ?>"
                        href="<?= base_url('/') ?>">Anasayfa
                    </a>
                </li>
                <li> <a class="nav-link scrollto <?php if ($title == 'Hakkımızda') echo 'active' ?>"
                        href="about">Hakkımızda</a></li>
                <li class="dropdown">
                    <a href="#"><span>Yardım</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#" id="pnr-control">Bilet Kontrol</a></li>
                        <!-- ======= PNR  Ekranı ======= -->
                        <?php include "app/Views/partials/_pnr_control.php" ?>
                        <!-- PNR Ekranı Kapanıs -->
                        <script src="public/assets/js/popup.js"></script>
                        <script>
                        PopUp('pnr-control', 'overlay-pnr');
                        </script>
                        <li><a href="#faq">Sıkça Sorulan Sorular</a></li>
                        <li><a href="#">Üyelik Avantajları</a></li>
                        <li><a href="#contact" class="nav-link scrollto">İletişim</a></li>
                    </ul>
                </li>

                <?php if (session()->get('user')) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle <?php if ($title == 'Profil') echo 'active' ?>">
                        <strong>Merhaba, <?php echo session()->get('user')['first_name'] ?></strong>
                    </a>
                    <ul class="dropdown-menu ">
                        <li> <a class="nav-link scrollto <?php if ($title == 'Profil') echo 'active' ?>"
                                href="profile">Hesap Bilgileri</a></li>
                                <li><a href="logout">Biletlerim</a></li>
                                <li><a href="logout">Rezervasyonlarım</a></li>
                        <li><a href="logout" style="color: red;">Çıkış Yap</a></li>
                    </ul>
                </li>
                <?php else : ?>
                <!-- ======= Giriş Yapma Ekranı ======= -->
                <?php include "app/Views/partials/_login_popup.php" ?>
                <!-- Giriş Yapma Ekranı Kapanıs -->
                <li><a href="#" id="show-login">Giriş</a></li>
                <li><a href="register">Kayıt Ol</a></li>
                <script src="public/assets/js/popup.js"></script>
                <script>
                PopUp('show-login', 'overlay-login');
                </script>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
    <!-- Bilet Kontrol Popup -->
</header>
<!-- End Header -->