<section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>İletişim</h2>
                    <h3>Bizimle <span>İletişime</span> Geç</h3>
                    <p>
                        Biletinle ilgili soruların varsa, canlı destek aracılığıyla veya
                        aşağıdaki form aracılığıyla iletebilirsin. Daha hızlı çözüm
                        sunabilmemiz için sorunu iletirken varsa biletine ait PNR
                        numarasını ve biletini alırken kullandığın e-posta adresi ve
                        telefon numarası ile yolcu ad-soyad bilgilerini iletmelisin.
                    </p>
                </div>
                <div>
                    <iframe style="border: 0; width: 100%; height: 270px"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.71309610098!2d30.1013698!3d40.7085876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb59c541176e45%3A0x65a5cdd854da0323!2sKocaeli%20%C3%9Cniversitesi%20Turizm%20Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1709028353620!5m2!1str!2str"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Konum:</h4>
                                <p>
                                    Kocaeli Üniversitesi Turizm Fakültesi 41080, Kartepe /
                                    KOCAELİ
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@umuttepeturizm.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Tel:</h4>
                                <p>0 (262) 532 23 11</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ad-Soyad"
                                        required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Adresiniz" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="PNR Numaranız (opsiyonel)" required />
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Başlık"
                                    required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mesaj"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>