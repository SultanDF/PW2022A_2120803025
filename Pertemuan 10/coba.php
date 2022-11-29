<?php
$mahasiswa = ["Sultan Daffa Fattarsyah", "2120803025", "Sistem Informasi", "s.daffa.fattarsyah@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en"></html>

<head>
    <title>Array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs; ?></li>
            <?php endforeach; ?>
    </ul>

</body>
</html>
