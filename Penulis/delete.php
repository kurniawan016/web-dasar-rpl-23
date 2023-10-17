<?php
include('../setting.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM penulis WHERE id = $id";
    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: tampil.php');
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID penulis tidak valid.";
}
?>
