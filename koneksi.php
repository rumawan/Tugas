<?php
// $host = mysqli_connect("localhost","root","");
// $db = mysqli_select_db($host,"toko_baju");
$host ='localhost';
$user='root';
$pass='';
$db='toko_baju';
$connect = mysqli_connect($host,$user,$pass,$db);
// if($connect){
//     echo "terkonesi";
// }else{
//     echo "tidak terkoneksi";
// }
?>