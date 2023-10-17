<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penulis</title>
</head>
<body>
    <h2 style="text-align:center">Tambah Penulis</h2>

    <?php
    if (isset($_POST['btnsimpan'])) {
        $nama = $_POST['txtnama'];
        $alamat = $_POST['txtalamat'];
        $hp = $_POST['txthp'];

        include '../setting.php';

        $sql = "INSERT INTO penulis (nama, alamat, hp) VALUES ('$nama', '$alamat', '$hp')";

        if (mysqli_query($link, $sql)) {
            echo "Data penulis berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }

        mysqli_close($link);
    }
    ?>

    <form action="" method="post">
        <label>Nama : </label>
        <input type="text" name="txtnama" required><br>

        <label>Alamat : </label>
        <input type="text" name="txtalamat" required><br>

        <label>Nomor HP : </label>
        <input type="text" name="txthp" required><br>

        <input type="submit" value="Simpan" name="btnsimpan">
        <a href="tampil.php">Batal</a>
    </form>
</body>
</html>
