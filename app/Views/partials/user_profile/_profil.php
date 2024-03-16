 <!-- Profil -->
 <div class="container-xl px-4 mt-4">

     <hr class="mt-0 mb-4">
     <div class="row">
         <div class="col-xl-4">
             <div class="card card-header-actions mb-4">
                 <div class="card-header d-flex justify-content-between align-items-center">
                     <span>Kayıtlı Kartlarım</span>
                     <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                         data-bs-target="#addCardModal">Ekle</button>
                 </div>
                 <div class="card-body px-0">
                    <?php foreach ($credit_cards as $credit_card) {
                        include "app/Views/partials/_credit_card.php";
                        echo '<hr>';
                    } ?>
                 </div>
             </div>
         </div>

         <div class="col-xl-8">
             <!-- Account details card-->
             <div class="card mb-4">
                 <div class="card-header">Hesap Detaylarım</div>
                 <div class="card-body">
                     <form method="POST" action="user/update">
                         <!-- Form Group (username)-->

                         <!-- Form Row-->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (first name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="name">Adınız:</label>
                                 <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Adınızı Giriniz"
                                     value="<?php echo $user['first_name'] ?>">
                             </div>
                             <!-- Form Group (last name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="lastName">Soyadınız:</label>
                                 <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Soyadınızı Giriniz"
                                     value="<?php echo $user['last_name'] ?>">
                             </div>
                         </div>
                         <!-- Form Row        -->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (organization name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="tc-kimlik">T.C Kimlik No:</label>
                                 <input class="form-control" id="inputOrgName" name="tc_id" type="number"
                                     placeholder="T.C Kimlik No Giriniz" value="<?php echo $user['tc_id'] ?>">
                             </div>
                             <!-- Form Group (location)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputLocation">Email Adresiniz:</label>
                                 <input class="form-control" id="inputEmailAddress" name="email" type="email"
                                     placeholder="Email Adresinizi Giriniz:" value="<?php echo $user['email'] ?>">
                             </div>
                         </div>

                         <!-- Form Row-->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (phone number)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputPhone">Telefon Numaranız:</label>
                                 <div class="input-group">
                                                <span class="input-group-text">+90</span>
                                                <input type="phone" aria-label="phone" name="phone_number" class="form-control" value="<?php echo $user['phone_number'] ?>">
                                            </div>
                             </div>
                             <!-- Form Group (birthday)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputBirthday">Doğum Tarihiniz</label>
                                 <input class="form-control" id="inputBirthday" type="date" name="birth_day"
                                     placeholder="Enter your birthday" value="<?php echo $user['birth_date'] ?>">
                             </div><!-- Form Group (email address)-->
                             <div class="mb-3">
                                 <label class="small mb-1" for="inputEmailAddress">Email Adresiniz:</label>
                                 <input class="form-control" id="inputLocation" type="text"
                                     placeholder="Enter your location" name="address" value="<?php echo $user['address'] ?>">
                             </div>
                         </div>
                         <!-- Save changes button-->
                         <button class="btn btn-primary" type="submit">Güncelle</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--  Kredi Kartı Ekleme Sayfası -->
 <?php include "app/Views/partials/user_profile/_add_credit_card.php" ?>

