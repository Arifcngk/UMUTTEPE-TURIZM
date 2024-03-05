<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/assets/css/sign_up.css" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Umuttepe | <?=esc($title)?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- KUllANICI KAYIT OL GİRİŞ -->
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Kayıt Ol</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="register" method="post">
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field">
                                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="first_name" placeholder="Adınız" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field">
                                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="last_name" placeholder="Soyadınız" required />
                                </div>
                            </div>
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="number" name="tc_id" placeholder="T.C Kimlik " required />
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="number" name="phone_number" placeholder="Telefon Numaranız" required />
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Paralo" required />
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="repassword" placeholder="Parola Tekrar" required />
                        </div>

                        <div class="input_field radio_option">
                            <input type="radio" name="gender" id="rd1" value="Male" />
                            <label for="rd1">Erkek</label>
                            <input type="radio" name="gender" id="rd2" value="Female" />
                            <label for="rd2">Kadın</label>
                            <input type="radio" name="gender" id="rd3" value="Other" />
                            <label for="rd3">Diğer</label>
                        </div>

                        <div class="input_field checkbox_option">
                            <input type="checkbox" id="cb1" />
                            <label for="cb1">Kaydolarak <a href="#"> Gizlilik Politikası</a> ve <a href="#">Kullanım
                                    Şartları'nı </a>kabul
                                ediyorum.</label>
                        </div>
                        <div class="input_field checkbox_option">
                            <input type="checkbox" id="cb2" />
                            <label for="cb2">Haber bültenini almak istiyorum </label>
                        </div>
                        <input class="button" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- KULLANICI KAYIT OL SON -->
</body>

</html>

<!-- KAYNAKLAR
https://codepen.io/anandaprojapati/pen/GmrwYE -->