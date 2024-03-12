<div class="container-xl px-4 mt-4">

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <!-- Change password card-->
            <div class="card mb-4">
                <div class="card-header">Parola Değişiliği</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (current password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="currentPassword">Eski Parola</label>
                            <input class="form-control" id="currentPassword" type="password"
                                placeholder="Enter current password">
                        </div>
                        <!-- Form Group (new password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="newPassword">Yeni Parola</label>
                            <input class="form-control" id="newPassword" type="password"
                                placeholder="Enter new password">
                        </div>
                        <!-- Form Group (confirm password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="confirmPassword">Yeni Parola Tekrarı</label>
                            <input class="form-control" id="confirmPassword" type="password"
                                placeholder="Confirm new password">
                        </div>
                        <button class="btn btn-primary" type="button">Kaydet</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-4">

            <!-- Delete account card-->
            <div class="card mb-4">
                <div class="card-header">Hesabımı Sil</div>
                <div class="card-body">
                    Hesabınızı silmek kalıcı bir işlemdir ve geri alınamaz. Hesabınızı silmek istediğinizden eminseniz
                    aşağıdaki düğmeyi seçin. 
                </div>
                <button type="submit" class="btn btn-danger">Sil</button>

            </div>
        </div>
    </div>
</div>