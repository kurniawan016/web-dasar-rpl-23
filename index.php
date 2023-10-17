<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
<!-- belajar php dasar -->
    <h1>PHP Dasar</h1>

    <?php

    $umur = 90;
    $nama = "Pahrul";

    echo 'Umur : ' . $umur;
    echo '<br>';
    echo "Umur : $umur ";
    echo '<hr>';

    // data array
    $array_nama = ['Pahrul', 'Irfan', 'ahmad'];

    echo 'Nama 1 : ' . $array_nama[0];
    echo 'Nama 2 : ' . $array_nama[1];
    echo '<hr>';

    $arrray_identitas = [
        'irfan' => ['nama' => 'Pahrul', 'umur' => '90'],
        'ahmad' => ['nama' => 'irfan', 'umur' => '95']
    ];

    $umur = 20;

    echo $umur;
    echo '<br>';

    echo $arrray_identitas['irfan']['umur'];
    echo '<hr>';

    echo 'Perulangan foreach dari array <br>';

    foreach ($array_nama as $key => $isi) {
        
        $key += 1;
        echo 'Data Nama ke ' . $key . ' = ' . $isi . '<br>';

    }

    echo '<hr>';

    for ($i=0; $i <= 10; $i++) { 
        echo $i . '<br>';
    }
    
    echo '<hr>';
    // contoh cetak string dari php 
    echo 'Cetak dari PHP';

    ?>

</body>

</html>
