<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Implementasi OOP Minuman</title>
</head>
<body>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="menu1.php">MENU1</a></li>
        <li><a href="menu2.php">MENU2</a></li>
        <li><a href="#">MENU3</a></li>

    </ul>
    <div class="container">
        <h1>TAMPILKAN DATA BASDAT</h1>

        <?php
        // Memasukkan file minuman.php untuk menggunakan kelas Minuman
        require_once('minuman.php');

        // Membuat objek minuman
        $minuman = new Minuman("Es Selendang Mayang", "Betawi");

        // Menampilkan data minuman
        echo "<p>Nama: " . $minuman->getNama() . "</p>";
        echo "<p>Asal: " . $minuman->getAsal() . "</p>";
        ?>

    </div>

</body>
</html>
