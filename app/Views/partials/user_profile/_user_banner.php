<div class="container">
    <div class="row">
        <!-- satın alınan -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                <i class="fa fa-ticket f-left"></i>
                    <h6 class="m-b-20 " style="text-align: center;" >Satın Alınan Biletler</h6>
                    <h2 class="text-right">
                       
                        <span><?php echo count($tickets['sold']) ?></span> <!-- Number -->
                    </h2>
                    
                </div>
            </div>
        </div>
        <!-- iade edilen  -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                <i class="fa fa-refresh f-left"></i>
                    <h6 class="m-b-20 " style="text-align: center;" >Rezerve Edilen Biletler</h6>
                    <h2 class="text-right">
                       
                        <span><?php echo count($tickets['reserved']) ?></span> <!-- Number -->
                    </h2>
                    
                </div>
            </div>
        </div>
        <!-- bakiye  -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                <i class="fa fa-money-bill f-left"></i>
                    <h6 class="m-b-20 " style="text-align: center;" >Hesap Bakiyem</h6>
                    <h2 class="text-right">
                       
                        <span><?php echo $user['balance'].'₺'?></span> <!-- Number -->
                    </h2>
                    
                </div>
            </div>
        </div>
        

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                <i class="fa fa-person f-left"></i>
                    <h6 class="m-b-20 " style="text-align: center;" >Kullanıcı Statüsü</h6>
                    <h2 class="text-right">
                       
                        <span><?php echo $user['type'] ?></span> <!-- Number -->
                    </h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>