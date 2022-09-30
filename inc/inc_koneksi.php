<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "web_recycle";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}