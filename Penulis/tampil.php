<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penulis</title>
</head>

<body>

    <h2 style="text-align:center">Data Penulis</h2>

    <br>

    <a href="tambah.php">Tambah Data</a> 

    <br>

    <table border="1" width="70%" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('../setting.php');
                $no = 1;
                $query = "SELECT * FROM penulis";
                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_object($result)) {
            ?>
                
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?= $row->nama; ?> </td>
                    <td> <?= $row->alamat; ?> </td>
                    <td> <?= $row->hp; ?> </td>
                    <td>
                        <a href="update.php?id=<?= $row->id ?>">Update</a> | <a href="delete.php?id=<?= $row->id ?>">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>

</body>

</html>
