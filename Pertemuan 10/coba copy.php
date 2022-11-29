<?php
$mahasiswa = [
                ["Sultan Daffa Fattarsyah", "2120803025", "Sistem Informasi", "s.daffa.fattarsyah@gmail.com"];
                ["Tono", "2120803026", "Sistem Informasi", "sdaffaf@gmail.com"];
                ["SultanD", "2120803029", "Sistem Informasi", "sfattarsyah@gmail.com"];

]
?>

<!DOCTYPE html>
<html lang="en"></html>

<head>
    <title>Array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs[0]; ?></li>
            <li><?php echo $mhs[1]; ?></li>
            <li><?php echo $mhs[2]; ?></li>
            <?php endforeach; ?>
    </ul>
    
</body>
</html>