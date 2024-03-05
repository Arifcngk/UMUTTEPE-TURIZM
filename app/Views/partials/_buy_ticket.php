<!-- ======= Bilet Satın Alma Ekranı ======= -->
<div class="">
    <section id="first-tab-group" class="tabgroup">
        <div class="section-title">
            <h2>Bilet Satın Al</h2>
            <h3>Sana Uygun Bileti <span> Bul</span></h3>
        </div>
        <div id="tab1">
            <div class="submit-form">
                <div class="btn-group pt-2 pb-2" role="group" aria-label="Route type switch">
                    <button type="button" class="btn btn-secondary" onclick="activateButton(1)">Tek Yön</button>
                    <button type="button" class="btn btn-secondary active" onclick="activateButton(2)">Gidiş-Dönüş</button>
                </div>

                <script>
                    function activateButton(buttonNumber) {
                        // Tüm butonları pasif hale getir
                        var buttons = document.querySelectorAll('.btn-group .btn');
                        buttons.forEach(function(button) {
                            button.classList.remove('active');
                        });

                        // Tıklanan butonu aktif hale getir
                        var clickedButton = document.querySelector('.btn-group .btn:nth-child(' + buttonNumber + ')');
                        clickedButton.classList.add('active');


                        var returnDate = document.querySelector('#return');

                        returnDate.disabled = (buttonNumber == 1) ? true : false; 
                    }
                </script>
                <h4>Sefer Bilgilerinizi Giriniz</h4>
                <form id="form-submit" action="find_ticket" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereden">Nereden:</label>
                                <select required name='departure_city' id="nereden">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <Option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></Option>
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
                                        <Option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></Option>
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