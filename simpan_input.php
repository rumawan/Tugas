<?php
include 'koneksi.php';
$nama =$_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$ins = mysqli_query($connect,"Insert into barang (nama_barang,deskripsi,harga,jumlah) 
values('$nama','$deskripsi','$harga','$jumlah')");
// if($ins){
//     echo "berhasil";
// }else{
//     die();
// }
// var_dump($nama);
// $insert = mysqli_query($connect,"INSERT INTO barang VALUES('','$nama','$deskripsi','$harga','$jumlah')");

header("location:index.php?pesan=input");
// var_dump($insert);
?>