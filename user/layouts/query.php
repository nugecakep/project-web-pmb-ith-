<?php

$id_user = $_SESSION['id_user'];
$user = query("SELECT * FROM pendaftar WHERE id_user = '$id_user' ");
$usr_tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' AND id_user = '$id_user' ");
$tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' AND id_user = '$id_user' ");
$j_usr_tolak = count($usr_tolak);
$j_user = count($user);
$jurusan = query("SELECT * FROM jurusan");
$jalurpendaftaran= query("SELECT * FROM jalurpendaftaran");
// Terima
$terimaa = query("SELECT * FROM terimaa WHERE id_user = '$id_user' ");

// Terima

?>