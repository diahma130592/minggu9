<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail kelompok</title>
</head>
<body>
    <ul>
        <li><img src="img/"<?= $_GET ["gambar"];?>></li>
        <li><?= $_GET ["kelompok"];?>  </li>
        <li><?= $_GET ["guru"];?></li>
        <li><?= $_GET ["kegiatan"];?></li>
        <li><?= $_GET ["pembimbing"];?></li>




    </ul>
    <a href = "latihan1.php" > kembali ke halaman 1 sebelumnya </a>
    




</body>
</html>