<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1B - Dynamic Form Input</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>SOAL A</h2>
    <h3>SOAL 1b</h3>

    <?php
    if (isset($_POST['jumlah_baris']) && isset($_POST['jumlah_kolom'])) {
        $jumlah_baris = (int)$_POST['jumlah_baris'];
        $jumlah_kolom = (int)$_POST['jumlah_kolom'];
    ?>
        <p>Jumlah Baris: <?php echo $jumlah_baris; ?></p>
        <p>Jumlah Kolom: <?php echo $jumlah_kolom; ?></p>

        <form action="soal1c.php" method="post" class="form-container">
            <input type="hidden" name="jumlah_baris" value="<?php echo $jumlah_baris; ?>">
            <input type="hidden" name="jumlah_kolom" value="<?php echo $jumlah_kolom; ?>">

            <?php
            for ($i = 1; $i <= $jumlah_baris; $i++) {
                echo '<div class="row">';
                for ($j = 1; $j <= $jumlah_kolom; $j++) {
                    echo '<div class="cell">';
                    echo '<label for="input_' . $i . '_' . $j . '">' . $i . '.' . $j . '</label>';
                    echo '<input type="text" name="input_' . $i . '_' . $j . '" id="input_' . $i . '_' . $j . '" required>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>

            <div class="submit-center">
                <input type="submit" value="SUBMIT">
            </div>
        </form>

    <?php
    } else {
        echo '<p class="error">Error: Data tidak ditemukan!</p>';
        echo '<a href="soal1a.php">Kembali ke form sebelumnya</a>';
    }
    ?>

</body>

</html>