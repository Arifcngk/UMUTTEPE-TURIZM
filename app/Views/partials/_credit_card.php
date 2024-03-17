<div class="d-flex align-items-center justify-content-between px-4">
    <div class="d-flex align-items-center">
        <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
        <div class="ms-4">
            <div class="small"><?php echo $credit_card['card_holder_name'] ?></div>
            <div class="text-xs text-muted"><b><?php echo $credit_card['card_number'] ?></b></div>
            <div class="small"><b><?php echo $credit_card['expiration_date'] ?></b></div>
        </div>
    </div>
    <div class="ms-4 small">
        <form method="POST" action="<?php echo base_url('delete_credit_card/'.$credit_card['id']) ?>">
            <button type="submit" class="btn" style="color: red;">Sil</button>
        </form>
    </div>
</div>
