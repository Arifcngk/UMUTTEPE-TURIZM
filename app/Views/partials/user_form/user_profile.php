 <!-- Kullanıcı Profili Baslangıc -->
 <div id="profilim" class="card">
                        <div class="card-header">
                            <h4>Profil</h4>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label"><i class="fas fa-user"></i> Ad</label>
                                    <input type="text" class="form-control" id="firstName" value="Mehmet" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label"><i class="fas fa-user"></i> Soyad</label>
                                    <input type="text" class="form-control" id="lastName" value="Sezer" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email
                                        Adres</label>
                                    <input type="email" class="form-control" id="email" value="john@example.com"
                                        readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label"><i class="fas fa-phone"></i> Telefon
                                        Numarası</label>
                                    <input type="tel" class="form-control" id="phone" value="+90 (123) 456 78 90"
                                        readonly>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="birthdate" class="form-label"><i class="fas fa-calendar-alt"></i> Doğum
                                        Tarihi</label>
                                    <input type="date" class="form-control" id="birthdate">
                                </div>

                                <div class="col-md-6">
                                    <label for="gender" class="form-label"><i class="fas fa-venus-mars"></i>
                                        Cinsiyet</label>
                                    <select class="form-select" id="gender">
                                        <option selected disabled>Seçiniz</option>
                                        <option value="male">Erkek</option>
                                        <option value="female">Kadın</option>
                                        <option value="other">Diğer</option>
                                    </select>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label"><i class="fas fa-map-marker-alt"></i>
                                    Adres</label>
                                <textarea class="form-control" id="address" rows="3"
                                    readonly>123 Street, City, Country</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary rounded-pill px-2 py-2 mt-2"
                                    style="background-color: #000000;">Bilgilerimi Güncelle</button>

                            </div>
                        </div>



                    </div>
                    <!-- Kullanıcı Profili Kapanıs -->