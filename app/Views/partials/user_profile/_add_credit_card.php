<div class="modal fade" id="addCardModal" tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addCardModalLabel">Kredi Kartı Bilgileri Ekle</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Credit card information form -->
                 <form id="creditCardForm">
                     <div class="mb-3">
                         <label for="cardHolderName" class="form-label">Kart Sahibinin Adı</label>
                         <input type="text" class="form-control" id="cardHolderName" placeholder="Kart Sahibinin Adı"
                             required>
                     </div>
                     <div class="mb-3">
                         <label for="cardNumber" class="form-label">Kart Numarası</label>
                         <input type="text" class="form-control" id="cardNumber" placeholder="Kart Numarası" required>
                     </div>
                     <div class="row">
                         <div class="col-md-6 mb-3">
                             <label for="expirationDate" class="form-label">Son Kullanma Tarihi</label>
                             <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY" required>
                         </div>
                         <div class="col-md-6 mb-3">
                             <label for="cvv" class="form-label">CVV</label>
                             <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                 <button type="button" class="btn btn-primary">Kaydet</button>
             </div>
         </div>
     </div>
 </div>
 
 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>