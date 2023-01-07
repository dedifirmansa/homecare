<?php
//set zona waktu
date_default_timezone_set('Asia/Jakarta');

//koneski database yics
$dbhost_yics = "localhost";
$dbuser_yics = "root";
$dbpass_yics = "";
$dbname_yics = "db_zaenudin";
$link_yics = mysqli_connect($dbhost_yics, $dbuser_yics, $dbpass_yics, $dbname_yics);

if (!$link_yics) {
     die("Koneksi dengan database gagal: " . mysqli_connect_error() .
          " - " . mysqli_connect_error());
}

// if (!$link_yics){
// //jika

// header("location: base/html/pages/error-404.html");
// }
