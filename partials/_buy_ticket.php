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
                  <form id="form-submit" action="" method="get">
                      <div class="row">
                          <div class="col-md-6">
                              <fieldset>
                                  <label for="nereden">Nereden:</label>
                                  <select required name='nereden' id="nereden">
                                      <option value="">Şehir Seçiniz:</option>
                                      <option value="">Kocaeli Otogar</option>
                                      <option value="">Gebze Otogar (Kocaeli)</option>
                                      <option value="">Düzce Otogar</option>
                                      <option value="">Sakarya Otogar</option>
                                      <option value="">Yalova Otogar</option>
                                      <option value="">İstanbul Otogar</option>
                                      <option value="">Ankara Otogar</option>
                                      <option value="">Antalya Otogar</option>

                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <label for="nereye">Nereye:</label>
                                  <select required name='nereye' id="nereye">
                                      <option value="">Şehir Seçiniz:</option>
                                      <option value="">Kocaeli Otogar</option>
                                      <option value="">Gebze Otogar (Kocaeli)</option>
                                      <option value="">Düzce Otogar</option>
                                      <option value="">Sakarya Otogar</option>
                                      <option value="">Yalova Otogar</option>
                                      <option value="">İstanbul Otogar</option>
                                      <option value="">Ankara Otogar</option>
                                      <option value="">Antalya Otogar</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <label for="departure">Gidiş Tarihi:</label>
                                  <input name="deparure" type="date" class="form-control date" id="departure"
                                      placeholder="Gidiş Tarihi...">
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <label for="return">Dönüş Tarihi:</label>
                                  <input name="return" type="date" class="form-control date" id="return"
                                      placeholder="Dönüş Tarihi...">
                              </fieldset>
                          </div>


                          <fieldset>
                              <button type="submit" id="form-submit" class="btn-bilet-al btn">Bilet Bul</button>
                          </fieldset>

                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>
  <!-- Bilet Satın Alma Ekranı Kapanış -->