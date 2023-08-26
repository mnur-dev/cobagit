<?php
$server = "sukaweb.my.id";
$user = "sukaweb1_ppdb";
$password = "emeni.ppdb";
$nama_db = "sukaweb1_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_db);

if(!$db){
    die("Gagal terhubung ke database : " . mysqli_connect_error());
}









?>