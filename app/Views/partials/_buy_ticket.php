<!-- ======= Bilet Satın Alma Ekranı ======= -->
<div class="">
    <section id="first-tab-group" class="tabgroup">
        <div class="section-title">
            <h2>Bilet Satın Al</h2>
            <h3>Sana Uygun Bileti <span> Bul</span></h3>
        </div>
        <div id="tab1">
            <div class="submit-form">
                <h4>Sefer Bilgilerinizi Giriniz</h4>
                <form id="form-submit" action="find_ticket" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereden">Nereden:</label>
                                <select required name='departure_city' id="nereden">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <Option value="<?= $city['id']?>"><?= $city['city_name'] ?></Option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereye">Nereye:</label>
                                <select required name='destination_city' id="nereye">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <Option value="<?= $city['id']?>"><?= $city['city_name'] ?></Option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="departure">Gidiş Tarihi:</label>
                                <input name="start_time" type="date" class="form-control date" id="departure" placeholder="Gidiş Tarihi...">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="return">Dönüş Tarihi:</label>
                                <input name="return" type="date" class="form-control date" id="return" placeholder="Dönüş Tarihi...">
                            </fieldset>
                        </div>
                        <fieldset>
                            <button type="submit" id="btn-find-ticket" class="btn-bilet-al btn">Bilet Bul</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- Bilet Satın Alma Ekranı Kapanış -->