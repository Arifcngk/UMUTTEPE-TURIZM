<div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
    <div class="boarding-pass">
        <header>
            <a class="logo">
                Umuttepe Turizm
            </a>
            <div class="flight">
                <small>Bilet Numarası</small>
                <strong><?= $ticket['id'] ?></strong>
            </div>
        </header>
        <section class="cities">
            <div class="city">
                <small><?= $ticket['departure_city'] ?></small>
                <strong><?= strtoupper(substr($ticket['departure_city'], 0, 4)) ?></strong>
            </div>
            <div class="city">
                <small>İzmir</small>
                <strong><?= strtoupper(substr($ticket['arrival_city'], 0, 4)) ?></strong>
            </div>
            <i class="fa-solid fa-angles-right airplane"></i>
        </section>
        <section class="infos">
            <div class="places">
                <div class="box">
                    <small>Durak</small>
                    <strong><em>Otogar</em></strong>
                </div>
                <div class="box">
                    <small>Kapı</small>
                    <strong><em>3</em></strong>
                </div>
                <div class="box">
                    <small>Plaka</small>
                    <strong><?= $ticket['plate_number'] ?></strong>
                </div>
                <div class="box">
                    <small>Koltuk</small>
                    <strong><?= $ticket['seat_number'] ?></strong>
                </div>
            </div>
            <div class="times">
                <div class="box">
                    <small>Kalkış</small>
                    <strong><?= date('H:i', strtotime($ticket['departure_time'])) ?></strong>
                </div>
                <div class="box">
                    <small>Varış</small>
                    <strong><?= date('H:i', strtotime($ticket['arrival_time'])) ?></strong>
                </div>
                <div class="box">
                    <small>Süre</small>
                    <?php
                    // Departure time ve arrival time değerlerini datetime objesine dönüştürme
                    $departure = new DateTime($ticket['departure_time']);
                    $arrival = new DateTime($ticket['arrival_time']);

                    // İki zaman arasındaki farkı alıp formata dönüştürme
                    $interval = $departure->diff($arrival);
                    $duration = $interval->format('%H:%I'); // Saat:dk formatı
                    ?>
                    <strong><?= $duration ?></strong>
                </div>
            </div>

        </section>
        <section class="strap">
            <div class="box">
                <div class="passenger">
                    <small>Yolcu</small>
                    <strong><?= $ticket['name'] . ' ' . $ticket['last_name'] ?></strong>
                </div>
                <div class="date">
                    <small>Tarih</small>
                    <strong><?= $ticket['departure_date'] ?></strong>
                </div>
            </div>
            <div class="qrcode-container" title="<?= $ticket['pnr_code']?>">
                <img class="qrcode" src="<?= $ticket['qrCode'] ?>" alt="QrCode">
            </div>
        </section>
    </div>
</div>
