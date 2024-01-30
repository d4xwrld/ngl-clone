<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ask Me Anything</title>
</head>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['messages'];
    $time = date('Y-m-d H:i:s'); // Waktu saat ini

    // Set zona waktu ke Asia/Jakarta (GMT+7)
    date_default_timezone_set('Asia/Jakarta');

    // Gunakan DateTime untuk mendapatkan waktu yang tepat
    $dateTime = new DateTime();
    $dateTime->setTimezone(new DateTimeZone('Asia/Jakarta'));
    $time = $dateTime->format('Y-m-d H:i:s');
    $data = "$time - $message\n"; // Format data yang akan disimpan

    // Membuka file atau membuatnya jika tidak ada
    $file = fopen('isian.txt', 'a');

    if ($file) {
        fwrite($file, $data); // Menulis data ke dalam file
        fclose($file); // Menutup file
        ?>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="card">
                <h3 class="card-title">Pesan Terkirim!</h3>
                <button class="card-link" onclick="window.location.href='index.php';">Kirim Pesan Lain</button>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="wrapper">
            <div class="container">
                <div class="card">
                    <h3 class="card-title">Pesan gagal terkirim!</h3>
                    <button class="card-link" onclick="window.location.href='index.php';">Kembali</button>
                </div>
            </div>
            <?php
    }
} else {
    ?>
            <div class="wrapper">
                <div class="container">
                    <div class="card">
                        <h3 class="card-title">Invalid Request!</h3>
                        <button class="card-link" onclick="window.location.href='index.php';">Kembali</button>
                    </div>
                </div>
                <?php
}

?>
                <div class=" footer">
                    <p>made by d4x with ♡</p>
                    <p>cuih</p>
                </div>
</body>

</html>