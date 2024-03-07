<!DOCTYPE html>
<html lang="tr">

<!-- head başlangıc -->

<head>
    <?php include "app/Views/partials/_head.php" ?>
</head>
<!-- head son -->

<body>

    <!-- navbar başlangıç -->
    <?php include "app/Views/partials/_navbar.php" ?>
    <!-- navbar başlangıç -->

    <?php if (!empty($message)) : ?>
    <div class="alert <?php echo $message['type']; ?>">
        <?php echo $message['text']; ?>
    </div>
    <?php endif; ?>
    <main id="main">
        <div class="container mt-5">
            <div class="row">

                <!-- Kategori Menüsü -->
                <div class="col-md-3">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action text-center"
                            data-target="profilim" style="background-color: #B4B4B8;">
                            <i class="fas fa-user mr-2"></i> Hesap Bilgilerim
                        </button>


                        <a href="#" class="list-group-item list-group-item-action active text-center"
                            data-target="profilim">Profilim</a>
                        <a href="#" class="list-group-item list-group-item-action  text-center"
                            data-target="ödeme-bilgiler">Ödeme Bilgilerim</a>
                        <a href="#" class="list-group-item list-group-item-action text-center"
                            data-target="sifre-degistir">Şifre
                            Değiştir</a>
                        <a href="#" class="list-group-item list-group-item-action text-center"
                            data-target="hesabi-sil">Hesabı
                            Sil</a>
                    </div>
                </div>

                <!-- Kategori Menüsü Kapanıs -->
                <div class="col-md-9">
                    <!-- Kullanıcı Profili Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_profile.php" ?>
                    
                    <!-- Kullanıcı Profili Kapanıs -->

                    <!-- Ödeme Bilgileri Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_credit_card.php" ?>
                    <!-- Ödeme Bilgileri Kapanıs -->

                    <!-- Sifre Degistir Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_password_update.php" ?>
                    <!-- Sifre Degistir Kapanıs -->


                    <!-- Hesabi Sil Baslangıc -->
                    <?php include "app/Views/partials/user_form/user_delete.php" ?>
                    <!-- Hesabı Sil Kapanıs -->

                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll('.list-group-item');

        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Remove active class from all list items
                menuItems.forEach(function(menuItem) {
                    menuItem.classList.remove('active');
                });

                // Add active class to the clicked list item
                this.classList.add('active');

                const target = this.getAttribute('data-target');
                const cards = document.querySelectorAll('.card');
                cards.forEach(function(card) {
                    if (card.id === target) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
    $('.input-cart-number').on('keyup change', function() {
        $t = $(this);

        if ($t.val().length > 3) {
            $t.next().focus();
        }

        var card_number = '';
        $('.input-cart-number').each(function() {
            card_number += $(this).val() + ' ';
            if ($(this).val().length == 4) {
                $(this).next().focus();
            }
        })

        $('.credit-card-box .number').html(card_number);
    });

    $('#card-holder').on('keyup change', function() {
        $t = $(this);
        $('.credit-card-box .card-holder div').html($t.val());
    });

    $('#card-holder').on('keyup change', function() {
        $t = $(this);
        $('.credit-card-box .card-holder div').html($t.val());
    });

    $('#card-expiration-month, #card-expiration-year').change(function() {
        m = $('#card-expiration-month option').index($('#card-expiration-month option:selected'));
        m = (m < 10) ? '0' + m : m;
        y = $('#card-expiration-year').val().substr(2, 2);
        $('.card-expiration-date div').html(m + '/' + y);
    })

    $('#card-ccv').on('focus', function() {
        $('.credit-card-box').addClass('hover');
    }).on('blur', function() {
        $('.credit-card-box').removeClass('hover');
    }).on('keyup change', function() {
        $('.ccv div').html($(this).val());
    });


    /*--------------------
    CodePen Tile Preview
    --------------------*/
    setTimeout(function() {
        $('#card-ccv').focus().delay(1000).queue(function() {
            $(this).blur().dequeue();
        });
    }, 500);

    /*function getCreditCardType(accountNumber) {
      if (/^5[1-5]/.test(accountNumber)) {
        result = 'mastercard';
      } else if (/^4/.test(accountNumber)) {
        result = 'visa';
      } else if ( /^(5018|5020|5038|6304|6759|676[1-3])/.test(accountNumber)) {
        result = 'maestro';
      } else {
        result = 'unknown'
      }
      return result;
    }

    $('#card-number').change(function(){
      console.log(getCreditCardType($(this).val()));
    })*/
    </script>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "app/Views/partials/_footer.php" ?>
    <!--  Footer-Kapanıs -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="public/assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="public/assets/js/main.js"></script>
    <script></script>
</body>

</html>