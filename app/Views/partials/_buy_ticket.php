<div class="container">
    <section id="first-tab-group" class="tabgroup">
        <div class="section-title">
            <h2>Bilet Satın Al</h2>
            <h3>Sana Uygun Bileti <span>Bul</span></h3>
        </div>
        <div id="tab1">
            <div class="submit-form">
                <div class="btn-group pt-2 pb-2" role="group" aria-label="Route type switch">
                    <input type="radio" class="btn-check" name="routeType" id="tekYon" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="tekYon" onclick="activateButton(1)">Tek Yön</label>

                    <input type="radio" class="btn-check" name="routeType" id="gidisDonus" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="gidisDonus" onclick="activateButton(2)">Gidiş-Dönüş</label>
                </div>

                <script>
                    function activateButton(buttonNumber) {
                        var returnDate = document.querySelector('#return');
                        returnDate.disabled = (buttonNumber === 1);
                    }
                </script>

                <h4>Sefer Bilgilerinizi Giriniz</h4>
                <form id="form-submit" action="find_ticket" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereden" class="form-label">Nereden:</label>
                                <select required name='departure_city' id="nereden" class="form-select">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                    <Option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></Option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereye" class="form-label">Nereye:</label>
                                <select required name='destination_city' id="nereye" class="form-select">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                    <Option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></Option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="departure" class="form-label">Gidiş Tarihi:</label>
                                <input name="start_time" type="date" class="form-control" id="departure">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="return" class="form-label">Dönüş Tarihi:</label>
                                <input name="return" type="date" class="form-control" id="return" disabled>
                            </fieldset>
                        </div>
                        <fieldset class="text-center">
                            <button type="submit" id="btn-find-ticket" class="btn btn-dark mx-auto d-block">Uygun Bileti Bul <i class="fas fa-search"></i></button>
                        </fieldset>
                    </div>
                </form>
                <a href="<?php echo base_url('/passengerinfo') ?>">Git</a>
            </div>
        </div>
    </section>
</div>
