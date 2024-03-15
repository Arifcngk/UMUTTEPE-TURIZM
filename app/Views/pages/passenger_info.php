<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>

    <style>
    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    #register {
        width: 20em;
        margin: auto;
    }

    #ticket {
        background: white;
        margin: 0 1em;
        padding: 1em;
        box-shadow: 0 0 5px rgba(0, 0, 0, .25);
    }

    #ticket h1 {
        text-align: center;
    }

    #ticket table {
        font-family: monospace;
        width: 100%;
        border-collapse: collapse;
    }

    #ticket td,
    #ticket th {
        padding: 5px;
    }

    #ticket th {
        text-align: left;
    }

    #ticket td,
    #ticket #total {
        text-align: right;
    }

    #ticket tfoot th {
        border-top: 1px solid black;
    }

    #entry {
        background: #333;
        padding: 12px;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .25);
    }

    #entry input {
        width: 100%;
        padding: 10px;
        border: 1px solid black;
        text-align: right;
        font-family: sans-serif;
        font-size: 20px;
        box-shadow: inset 0 0 3px rgba(0, 0, 0, .5);
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    #entry input:focus {
        outline: none;
        border-color: rgba(255, 255, 255, .75);
    }
    </style>

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
        <div class="container-fluid">

            <div class="container">
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                                class="bi bi-arrow-left-square me-2"></i></a> Koltuk Seçme Ekranına Dön</h2>
                    <div class="hstack gap-3">
                        <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span
                                class="text">İptal</span></button>
                        <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span
                                class="text">Ödeme Ekranına </span></button>
                    </div>
                </div>

                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- Basic information -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">İletişim Bilgileri</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Telefon Numarası</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">e-posta</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Address -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Yolcu Bilgileri</h3>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ad</label>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Soyad</label>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cinsiyet</label>
                                            <select class="form-select">
                                                <option value="draft" selected="">Seçiniz</option>
                                                <option value="active">Erkek </option>
                                                <option value="active">Kadın</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Doğum Tarihi</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">T.C Kimlik No</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Durumu</label>

                                            <select class="form-select">
                                                <option value="draft" selected="">Seçiniz</option>
                                                <option value="active">Öğrenci </option>
                                                <option value="active">Memur</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="col-lg-4">
                        <!-- Status -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="register">
                                    <div id="ticket">

                                        <table>

                                            <tr>
                                                <th>1. Yolcu</th>
                                                <th id="total">120.00 ₺</th>
                                            </tr>
                                            <tr>
                                                <th>2. Yolcu</th>
                                                <th id="total">120.00 ₺</th>
                                            </tr>

                                            <tbody id="entries">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Toplam Tutar</th>
                                                    <th id="total">240.00 ₺</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Bilet Bilgileri -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Bilet Bilgileri</h3>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <!-- Notes -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Ödeme Yap</h3>
                                <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span
                                class="text">Ödeme Ekranına </span></button>                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>


    </main>





    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "app/Views/partials/_footer.php" ?>
    <!--  Footer-Kapanıs -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="public/assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/main.js"></script>

    <script src="https://use.fontawesome.com/782caa4c45.js"></script>

    <script></script>
</body>

</html>