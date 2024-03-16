<div class="modal fade" id="seatModal" tabindex="-1" role="dialog" aria-labelledby="seatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="seatModalLabel">Otobüs Koltukları</h5>
                <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close" style="box-shadow: 0 0 5px #e43c5c; background-color: #e43c5c; border: none;">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="seatMap">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Kapat butonuna tıklanınca modalı kapat
    $('.close').click(function() {
        $('#seatModal').modal('hide');
    });
</script>