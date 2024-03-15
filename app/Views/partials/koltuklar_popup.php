<!-- app/Views/koltuklar_popup.php -->

<div class="modal fade" id="koltukModal" tabindex="-1" role="dialog" aria-labelledby="koltukModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="koltukModalLabel">Koltuklar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <?php foreach ($koltuklar as $koltuk): ?>
                        <li class="list-group-item">
                            Koltuk Numarası: <?= $koltuk['seat_number'] ?> | Durum: <?= $koltuk['status'] ?> | Cinsiyet: <?= $koltuk['gender'] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
