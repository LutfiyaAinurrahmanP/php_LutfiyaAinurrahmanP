<?php
include 'connection.php';

$queries = include 'queries.php';
$query = $queries['laporan_hobi'];
$result = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2A - Laporan Hobi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>SOAL A</h2>
    <h3>SOAL 2a</h3>

    <table border="1">
        <tr>
            <th>Hobi</th>
            <th>Jumlah Person</th>
        </tr>
        <?php while ($row = $result->fetch()): ?>
            <tr>
                <td><?= $row['hobi'] ?></td>
                <td><?= $row['jumlah'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <a href="soal2b.php"><button>SEARCH HOBI</button></a>
</body>

</html>