<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1A - Form Input</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>SOAL A</h2>
    <h3>SOAL 1a</h3>

    <form action="soal1b.php" method="post" class="form-input">
        <div class="input-group">
            <label for="jumlah_baris">Inputkan Jumlah Baris:</label>
            <input type="number" name="jumlah_baris" id="jumlah_baris" min="1" required>
            <p>Contoh : 1</p>
        </div>

        <div class="input-group">
            <label for="jumlah_kolom">Inputkan Jumlah Kolom:</label>
            <input type="number" name="jumlah_kolom" id="jumlah_kolom" min="1" required>
            <p>Contoh : 3</p>
        </div>

        <div class="submit-center">
            <input type="submit" value="SUBMIT">
        </div>
    </form>

</body>

</html>