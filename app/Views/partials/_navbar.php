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
                        <li><a href="pnr">Bilet Kontrol</a></li>

                        <li><a href="#faq">Sıkça Sorulan Sorular</a></li>
                        <li><a href="#">Üyelik Avantajları</a></li>
                        <li><a href="#contact" class="nav-link scrollto">İletişim</a></li>
                    </ul>
                </li>

                <?php if (session()->get('user')) : ?>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle">
                        <i class="bi bi-person fs-5"></i>
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a href="profile">Profil</a></li>
                        <li><a href="logout">Çıkış Yap</a></li>
                    </ul>
                </li>
                <?php else : ?>
                <li><a href="#" id="show-login">Giriş</a></li>
                <li><a href="register">Kayıt Ol</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
    <!-- Bilet Kontrol Popup -->

</header>


<!-- End Header -->