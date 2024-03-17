<div class="container-xl px-4 mt-4">

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <!-- Change password card-->
            <div class="card mb-4">
                <div class="card-header">Parola Değişiliği</div>
                <div class="card-body">
                    <form method="POST" action="user/update-password">
                        <!-- Form Group (current password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="currentPassword">Eski Parola</label>
                            <input class="form-control" id="currentPassword" name="current_password" type="password" placeholder="Eski Parolanızı Giriniz">
                        </div>
                        <!-- Form Group (new password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="newPassword">Yeni Parola</label>
                            <input class="form-control" id="newPassword" name="new_password" type="password" placeholder="Yeni Parola">
                        </div>
                        <!-- Form Group (confirm password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="confirmPassword">Yeni Parola Tekrarı</label>
                            <input class="form-control" id="confirmPassword" name="confirm_password" type="password" placeholder="Yeni Parolayı Tekrar Giriniz">
                        </div>
                        <button class="btn btn-primary" type="submit">Kaydet</button>
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