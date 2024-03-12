 <!-- Profil -->
 <main class="py-3 bg-surface-secondary">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-5 mx-auto">


                                <!-- Form -->
                                <div class="mb-4">
                                    <h5 class="mb-0">Profil Bilgileri</h5>
                                </div>
                                <form class="mb-4">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="first_name">Adı</label>
                                                <input type="text" class="form-control" id="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="last_name">Soyadı</label>
                                                <input type="text" class="form-control" id="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="phone_number">Telefon</label>
                                                <input type="tel" class="form-control" id="phone_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="tc_kimlik_no">T.C Kimlik No</label>
                                                <input type="tel" class="form-control" id="phone_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="border p-3">
                                                <label class="form-label" for="date">Doğum Tarihi</label>
                                                <input type="date" class="form-control" id="date">
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-4">
                                            <div class="border p-3">
                                                <label class="form-label" for="country">Cinsiyet</label>
                                                <select class="form-select" id="country" placeholder="Your email"
                                                    aria-label="Default select example">
                                                    <option selected>Seçiniz</option>
                                                    <option value="1">Erkek</option>
                                                    <option value="2">Kadın</option>
                                                    <option value="3">Belirtmek İstemiyorum</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-check mt-3">
                                                <input class="form-check-input" type="checkbox"
                                                    name="check_primary_address" id="check_primary_address">
                                                <label class="form-check-label" for="check_primary_address">
                                                    Değişiklikleri varsayılan yap
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mt-1">
                                        <button type="submit" class="btn btn-sm btn-primary">Kaydet</button>
                                    </div>
                                </form>
                                <hr class="my-6" />
                                <!-- Individual switch cards -->
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="card shadow border-2">
                                            <div class="card-body">
                                                <h5 class="mb-2">Public profile</h5>
                                                <p class="text-sm text-muted mb-4">
                                                    Making your profile public means that anyone on the network will be
                                                    able to find you.
                                                </p>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow border-2">
                                            <div class="card-body">
                                                <h5 class="mb-2">Show my email</h5>
                                                <p class="text-sm text-muted mb-4">
                                                    Showing your e-mail addresses means that anyone on the network will
                                                    be able to find you.
                                                </p>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card shadow border-2">
                                            <div class="card-body d-flex align-items-center">
                                                <div>
                                                    <h5 class="text-danger mb-2">Deactivate account</h5>
                                                    <p class="text-sm text-muted">
                                                        Once you delete your account, there is no going back. Please be
                                                        certain.
                                                    </p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger">Deactivate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>