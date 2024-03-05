  <!-- ======= Hızlı Satın Alma  ======= -->
  <section id="features" class="features">
      <div class="container">
          <div class="section-title">
              <h2>HIzlı Satın Alma</h2>
              <h3>En Çok Tercih Edilen <span>Seferler</span></h3>
          </div>
          <div class="row">
              <?php foreach ($routes as $route) : ?>
                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                      <div class="icon-box">
                          <i class="bx bxs-location-plus" style="color: #126930"></i>
                          <h3><a href="route-details?id=<?= $route['id'] ?>"><?= $route['departure_city'] . ' --> ' .$route['arrival_city'] ?></a></h3>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
  </section>
  <!-- Hızlı Satın Alma Son -->