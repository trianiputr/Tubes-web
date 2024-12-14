<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pencarian</title>
</head>
<body>
    <h2>Pencarian Kata Kunci</h2>
    
    <!-- Form untuk input kata kunci -->
    <form method="GET" action="">
        <label for="search">Masukkan kata kunci:</label><br>
        <input type="text" id="search" name="search" required><br><br>
        <button type="submit">Cari</button>
    </form>

    <?php
    // Mengecek jika ada kata kunci yang dikirim melalui metode GET
    if (isset($_GET['search'])) {
        // Mengambil nilai kata kunci dari parameter GET
        $searchKeyword = htmlspecialchars($_GET['search']);
        echo "<p>Anda mencari kata: <strong>$searchKeyword</strong></p>";
    }
    ?>
</body>
</html>
