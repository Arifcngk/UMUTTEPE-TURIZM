<!-- app/Views/ticket_view.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>

<body>
    <h1>Tickets</h1>
    <table border="1">
        <tr>
            <th>Seat Number</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Departure City</th>
            <th>Arrival City</th>
        </tr>
        <?php foreach ($tickets as $ticket): ?>
        <tr>
            <td><?= $ticket['seat_number'] ?></td>
            <td><?= $ticket['departure_time'] ?></td>
            <td><?= $ticket['arrival_time'] ?></td>
            <td><?= $ticket['departure_city'] ?></td>
            <td><?= $ticket['arrival_city'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>