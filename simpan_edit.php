<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($connect,"UPDATE barang SET nama_barang='$nama',deskripsi='$deskripsi',harga='$harga',jumlah=$jumlah WHERE id='$id'");

header("location:index.php?pesan=edit");
?>