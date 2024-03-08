<!-- ======= Bilet Satın Alma Ekranı ======= -->
<div class="">
    <section id="first-tab-group" class="tabgroup">
    <div class="container" style="max-width: 800px; margin: 50px auto;">
    <section id="first-tab-group" class="tabgroup" style="margin-top: 20px;">
        <div class="section-title">
            <h2 style="font-size: 24px; color: #333;">Bilet Satın Al</h2>
            <h3 style="font-size: 20px; color: #333;">Sana Uygun Bileti <span style="font-weight: bold;">Bul</span></h3>
        </div>
        <div id="tab1" style="margin-top: 20px;">
            <div class="submit-form">
                <div class="btn-group pt-2 pb-2" role="group" aria-label="Route type switch">
                    <button type="button" class="btn btn-secondary" style="width: 100px; font-size: 16px; margin-right: 10px;" onclick="activateButton(1)">Tek Yön</button>
                    <button type="button" class="btn btn-secondary active" style="width: 100px; font-size: 16px;" onclick="activateButton(2)">Gidiş-Dönüş</button>
                </div>

                <script>
                    function activateButton(buttonNumber) {
                        var buttons = document.querySelectorAll('.btn-group .btn');
                        buttons.forEach(function(button) {
                            button.classList.remove('active');
                        });
                        var clickedButton = document.querySelector('.btn-group .btn:nth-child(' + buttonNumber + ')');
                        clickedButton.classList.add('active');

                        var returnDate = document.querySelector('#return');
                        returnDate.disabled = (buttonNumber == 1) ? true : false;
                    }
                </script>

                <h4 style="font-size: 18px; color: #333; margin-top: 20px;">Sefer Bilgilerinizi Giriniz</h4>
                <form id="form-submit" action="find_ticket" method="get" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereden" style="font-size: 16px; color: #333;">Nereden:</label>
                                <select required name='departure_city' id="nereden" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="nereye" style="font-size: 16px; color: #333;">Nereye:</label>
                                <select required name='destination_city' id="nereye" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                                    <option value="">Şehir Seçiniz:</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <option value="<?= $city['city_plate'] ?>"><?= $city['city_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="departure" style="font-size: 16px; color: #333;">Gidiş Tarihi:</label>
                                <input name="start_time" type="date" class="form-control date" id="departure" placeholder="Gidiş Tarihi..." style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <label for="return" style="font-size: 16px; color: #333;">Dönüş Tarihi:</label>
                                <input name="return" type="date" class="form-control date" id="return" placeholder="Dönüş Tarihi..." style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                            </fieldset>
                        </div>
                        <fieldset>
                            <button type="submit" id="btn-find-ticket" class="btn-bilet-al btn" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px; background-color: #007bff; color: #fff; cursor: pointer; transition: background-color 0.3s;">Bilet Bul</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

    </section>
</div>
<!-- Bilet Satın Alma Ekranı Kapanış -->