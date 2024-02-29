<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/kayit_ol.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <title>Umuttepe Turizm-Kayıt Ol</title>
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
            <form>
              <div class="row clearfix">
                <div class="col_half">
                  <div class="input_field">
                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                    <input type="text" name="name" placeholder="Adınız" />
                  </div>
                </div>
                <div class="col_half">
                  <div class="input_field">
                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                    <input
                      type="text"
                      name="name"
                      placeholder="Soyadınız"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input
                  type="number"
                  name="tc_no"
                  placeholder="T.C Kimlik "
                  required
                />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input
                  type="number"
                  name="tel"
                  placeholder="Telefon Numaranız"
                  required
                />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input
                  type="password"
                  name="password"
                  placeholder="Paralo"
                  required
                />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input
                  type="password"
                  name="password"
                  placeholder="Parola Tekrar"
                  required
                />
              </div>

              <div class="input_field radio_option">
                <input type="radio" name="radiogroup1" id="rd1" />
                <label for="rd1">Erkek</label>
                <input type="radio" name="radiogroup1" id="rd2" />
                <label for="rd2">Kadın</label>
              </div>
              <div class="input_field select_option">
                <select>
                  <option>Select a country</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                </select>
                <div class="select_arrow"></div>
              </div>
              <div class="input_field checkbox_option">
                <input type="checkbox" id="cb1" />
                <label for="cb1"
                  >Kaydolarak Gizlilik Politikası ve Kullanım Şartları'nı kabul
                  ediyorum.</label
                >
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
    <p class="credit">
      Developed by
      <a href="http://www.designtheway.com" target="_blank">Design the way</a>
    </p>
    <!-- KULLANICI KAYIT OL SON -->
  </body>
</html>

<!-- KAYNAKLAR
https://codepen.io/anandaprojapati/pen/GmrwYE -->
