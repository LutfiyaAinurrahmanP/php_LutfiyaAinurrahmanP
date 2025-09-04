<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1C - Output</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>SOAL A</h2>
    <h3>SOAL 1c</h3>

    <?php
    if (isset($_POST['jumlah_baris']) && isset($_POST['jumlah_kolom'])) {
        $jumlah_baris = (int)$_POST['jumlah_baris'];
        $jumlah_kolom = (int)$_POST['jumlah_kolom'];

        echo '<div class="result-container">';
        echo '<h3>Hasil:</h3>';

        for ($i = 1; $i <= $jumlah_baris; $i++) {
            echo '<div class="baris-title">baris ' . $i . '</div>';
            for ($j = 1; $j <= $jumlah_kolom; $j++) {
                $field_name = 'input_' . $i . '_' . $j;
                $value = isset($_POST[$field_name]) ? htmlspecialchars($_POST[$field_name]) : '';
                echo '<div class="item">' . $i . '.' . $j . ' : ' . $value . '</div>';
            }
            echo '<br>';
        }
        echo '</div>';
    } else {
        echo '<p class="error">Error: Data tidak ditemukan!</p>';
    }
    ?>

</body>

</html>