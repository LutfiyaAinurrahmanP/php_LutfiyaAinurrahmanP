<?php
include 'connection.php';

$queries = include 'queries.php';
$search = '';
$results = [];

if (isset($_POST['search'])) {
    $search = $_POST['hobi'];
    $query = str_replace('?', "'%$search%'", $queries['search_hobi']);
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll();
}

$hobi_list = $pdo->query($queries['list_hobi'])->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2B - Search Hobi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>SOAL A</h2>
    <h3>SOAL 2b</h3>

    <form method="POST">
        <label>Cari Berdasarkan Hobi:</label>
        <input type="text" name="hobi" value="<?= $search ?>" required>
        <input type="submit" name="search" value="SEARCH">
    </form>

    <p><strong>Hobi tersedia:</strong></p>
    <?php foreach ($hobi_list as $h): ?>
        <button onclick="document.querySelector('input[name=hobi]').value='<?= $h['hobi'] ?>'"><?= $h['hobi'] ?></button>
    <?php endforeach; ?>

    <?php if ($results): ?>
        <h3>Hasil untuk "<?= $search ?>":</h3>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
            <?php foreach ($results as $r): ?>
                <tr>
                    <td><?= $r['nama'] ?></td>
                    <td><?= $r['alamat'] ?></td>
                    <td><?= $r['hobi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif (isset($_POST['search'])): ?>
        <p>Tidak ada hasil untuk "<?= $search ?>"</p>
    <?php endif; ?>

    <a href="soal2a.php"><button>KEMBALI</button></a>
</body>

</html>