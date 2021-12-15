<?php
$host="localhost";
$username="root";
$password="";
$databasename="akademik";
//melakukan konek ke database menggunakan mysqli_connect dengan parameter host, username, password, dan databasename
$con=@mysqli_connect($host,$username,$password,$databasename);

//mengecheck apakah koneksi berhasil terkoneksi atau tidak
if (!$con) {
 echo "Error: " . mysqli_connect_error();
exit();
}
?>