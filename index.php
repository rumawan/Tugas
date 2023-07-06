<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Toko Barokah</h1>
        <h2>jl.Kerembong-Durian Janapria,Lombok Tengah Kode= 83554.</h2>
    </div>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data Berhasil Di Input.";
        }elseif ($pesan == "update"){
            echo "Data Berhasil di Update.";
        }elseif ($pesan == "hapus") {
            echo "Data Berhasil di Hapus";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="form_input.php">+Tambah Data Baru</a>
    <h3>Data Barang</h3>
    <table border="2" class="table" >
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>

        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM barang")or
                        die(mysqli_error($connect));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['deskripsi']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td>
                <a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> ||
                <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>