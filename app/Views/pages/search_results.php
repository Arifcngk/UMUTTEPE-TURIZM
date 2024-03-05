<?php if (!empty($routes)): ?>
    <h2>Uygun Seferler</h2>
    <ul>
        <?php foreach ($routes as $route): ?>
            <li><?= $route['departure_city'] ?> - <?= $route['arrival_city'] ?> - <?= $route['departure_time'] ?> - <?= $route['arrival_time'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Uygun sefer bulunamadı.</p>
<?php endif; ?>