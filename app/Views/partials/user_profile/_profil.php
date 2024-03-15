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
                     <!-- Payment method 1-->
                     <div class="d-flex align-items-center justify-content-between px-4">
                         <div class="d-flex align-items-center">
                             <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                             <div class="ms-4">
                                 <div class="small">Mehmet Sezer - İş Bankası </div>
                                 <div class="text-xs text-muted"><b>1111 1111 1111 11</b></div>
                                 <div class="small"><b>04/2024</b> </div>

                             </div>
                         </div>
                         <div class="ms-4 small">
                             <a href="#!">Sil</a>
                         </div>
                     </div>
                     <hr>
                     <!-- Payment method 2-->
                     <div class="d-flex align-items-center justify-content-between px-4">
                         <div class="d-flex align-items-center">
                             <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                             <div class="ms-4">
                                 <div class="small">Mehmet Sezer - Zirat Bankası </div>
                                 <div class="text-xs text-muted"><b>1111 1111 1111 11</b></div>
                                 <div class="small"><b>04/2024</b> </div>
                             </div>
                         </div>
                         <div class="ms-4 small">
                             <a href="#!">Sil</a>
                         </div>
                     </div>
                     <hr>
                     <!-- Payment method 3-->
                     <div class="d-flex align-items-center justify-content-between px-4">
                         <div class="d-flex align-items-center">
                             <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                             <div class="ms-4">
                                 <div class="small">Mehmet Sezer - İş Bankası </div>
                                 <div class="text-xs text-muted"><b>1111 1111 1111 11</b></div>
                                 <div class="small"><b>04/2024</b> </div>

                             </div>
                         </div>
                         <div class="ms-4 small">

                             <a href="#!">Sil</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-xl-8">
             <!-- Account details card-->
             <div class="card mb-4">
                 <div class="card-header">Hesap Detaylarım</div>
                 <div class="card-body">
                     <form>
                         <!-- Form Group (username)-->

                         <!-- Form Row-->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (first name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="name">Adınız:</label>
                                 <input class="form-control" id="name" type="text" placeholder="Adınızı Giriniz"
                                     value="Mehmet">
                             </div>
                             <!-- Form Group (last name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="lastName">Soyadınız:</label>
                                 <input class="form-control" id="lastName" type="text" placeholder="Soyadınızı Giriniz"
                                     value="Sezer">
                             </div>
                         </div>
                         <!-- Form Row        -->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (organization name)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="tc-kimlik">T.C Kimlik No:</label>
                                 <input class="form-control" id="inputOrgName" type="number"
                                     placeholder="T.C Kimlik No Giriniz" value="63565345212">
                             </div>
                             <!-- Form Group (location)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputLocation">Email Adresiniz:</label>
                                 <input class="form-control" id="inputEmailAddress" type="email"
                                     placeholder="Email Adresinizi Giriniz:" value="name@example.com">
                             </div>
                         </div>

                         <!-- Form Row-->
                         <div class="row gx-3 mb-3">
                             <!-- Form Group (phone number)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputPhone">Telefon Numaranız:</label>
                                 <div class="input-group">
                                                <span class="input-group-text">+90</span>
                                                <input type="phone" aria-label="phone" class="form-control">
                                            </div>
                             </div>
                             <!-- Form Group (birthday)-->
                             <div class="col-md-6">
                                 <label class="small mb-1" for="inputBirthday">Doğum Tarihiniz</label>
                                 <input class="form-control" id="inputBirthday" type="date" name="birthday"
                                     placeholder="Enter your birthday" value="06/10/1988">
                             </div><!-- Form Group (email address)-->
                             <div class="mb-3">
                                 <label class="small mb-1" for="inputEmailAddress">Email Adresiniz:</label>
                                 <input class="form-control" id="inputLocation" type="text"
                                     placeholder="Enter your location" value="San Francisco, CA">
                             </div>
                         </div>
                         <!-- Save changes button-->
                         <button class="btn btn-primary" type="button">Güncelle</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--  Kredi Kartı Ekleme Sayfası -->
 <?php include "app/Views/partials/user_profile/_add_credit_card.php" ?>

