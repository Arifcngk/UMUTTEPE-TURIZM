<?php
    // $username = $_POST['username'];
    // $password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/sign_up.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Umuttepe Turizm-Kayıt Ol</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body> 
    <!-- KUllANICI KAYIT OL GİRİŞ -->
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Giriş Yap</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="sign_up.php" method="post">
                        
                       
                      
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Parola" required />
                        </div>
                      

                     
                        <input class="button" type="submit" value="Giriş Yap" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- KULLANICI KAYIT OL SON -->
</body>

</html>
