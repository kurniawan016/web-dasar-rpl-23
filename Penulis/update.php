<?php
include('../setting.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query untuk mendapatkan data penulis dengan ID tertentu
    $query = "SELECT * FROM penulis WHERE id = $id";
    $result = mysqli_query($link, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_object($result);

            // Handle form submission untuk mengupdate data penulis
            if (isset($_POST['btnupdate'])) {
                $nama = $_POST['txtnama'];
                $alamat = $_POST['txtalamat'];
                $hp = $_POST['txthp'];

                // Lakukan query UPDATE untuk mengubah data penulis
                $updateQuery = "UPDATE penulis SET nama = '$nama', alamat = '$alamat', hp = '$hp' WHERE id = $id";

                if (mysqli_query($link, $updateQuery)) {
                  header('Location: tampil.php');
                } else {
                    echo "Error: " . $updateQuery . "<br>" . mysqli_error($link);
                }
            }

            // Tampilkan formulir untuk mengupdate data penulis
            echo '<form action="" method="post">';
            echo '<label>Nama : </label>';
            echo '<input type="text" name="txtnama" value="' . $row->nama . '" required><br>';

            echo '<label>Alamat : </label>';
            echo '<input type="text" name="txtalamat" value="' . $row->alamat . '" required><br>';

            echo '<label>Nomor HP : </label>';
            echo '<input type="text" name="txthp" value="' . $row->hp . '" required><br>';

            echo '<input type="submit" value="Simpan" name="btnupdate">';
            echo '</form>';
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
} else {
    echo "ID penulis tidak valid.";
}
?>
