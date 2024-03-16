<div class="card card-route mb-5 p-2" style="min-height: 100px; ">
    <div class="card-body d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <h5 class="card-text text-secondary font-weight-bold" style="font-size: 24px;"><?= $route['departure_city'] . "  " ?><i class="fa-solid fa-angles-right" style="font-size: 18px; color: #e43c5c;"></i><?= "  " . $route['arrival_city'] ?></h5>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-clock" style="font-size: 24px; margin-right: 4px; color: #1d3445; text-shadow: 0 0 1px #e43c5c; color: #e43c5c;"></i>
                <p class="card-text text-secondary font-weight-bold" style="font-size: 24px; color: #1d3445; text-shadow: 0 0 1px #1d3445;"><?= $route['departure_time'] ?></p>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-couch font-weight-bold" style="font-size: 20px; margin-right: 8px; color: #899dab; text-shadow: 0 0 1px #1d3445;"></i>
                <p class="card-text font-weight-bold" style="font-size: 24px; color: #899dab; text-shadow: 0 0 1px #1d3445;">2+1</p>
            </div>
            <div class="col-md-2">
                <div class="text-center"><!-- yatayda ortalamak için text-center sınıfını ekleyin -->
                    <h3 class="card-text" style="color: #e43c5c; text-shadow: 0 0 1px #e43c5c;"><b>200 ₺</b></h3>
                    <a data-route-id="<?php echo $route['id'] ?>" class="btn btn-secondary w-75 py-2 show-seats-btn" style="min-width: 100px; box-shadow: 0 0 5px #e43c5c; background-color: #e43c5c; border: none;">Koltuk Seç</a>
                </div>
            </div>
        </div>
    </div>
</div>