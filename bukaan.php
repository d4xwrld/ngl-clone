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

// Membaca data dari file
$messages = file_get_contents('isian.txt');
?>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="card">
                <h3 class="card-title">Pesan</h3>
                <?php
                // Menampilkan data
echo nl2br($messages);
?>
            </div>
        </div>