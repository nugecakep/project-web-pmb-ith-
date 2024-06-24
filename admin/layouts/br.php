<?php

// Pendaftar
$pendaftar = query("SELECT * FROM pendaftar WHERE stat = 'Menunggu Keputusan' ");
// Pendaftar

// Jurusan
$jurusan = query("SELECT * FROM jurusan");
// Jurusan


$rpl1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'ilmu komputer' AND  stat = 'Menunggu Keputusan' ");
$rpl2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'ilmu komputer' AND  stat = 'Menunggu Keputusan' ");
$rpl3 = query("SELECT * FROM pendaftar WHERE jurusan_3 = 'ilmu komputer' AND  stat = 'Menunggu Keputusan' ");
$j_rpl1 = count($rpl1);
$j_rpl2 = count($rpl2);
$j_rpl3 = count($rpl3);
$total_rpl = $j_rpl1 + $j_rpl2 +$j_rpl3;


$tkj1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'sistem informasi' AND  stat = 'Menunggu Keputusan' ");
$tkj2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'sistem informasi' AND  stat = 'Menunggu Keputusan' ");
$tkj3 = query("SELECT * FROM pendaftar WHERE jurusan_3 = 'sistem informasi' AND  stat = 'Menunggu Keputusan' ");
$j_tkj1 = count($tkj1);
$j_tkj2 = count($tkj2);
$j_tkj3 = count($tkj3);
$total_tkj = $j_tkj1 + $j_tkj2 + $j_tkj3;



$mm1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'matematika' AND  stat = 'Menunggu Keputusan' ");
$mm2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'matematika' AND  stat = 'Menunggu Keputusan' ");
$mm3 = query("SELECT * FROM pendaftar WHERE jurusan_3 = 'matematika' AND  stat = 'Menunggu Keputusan' ");
$j_mm1 = count($mm1);
$j_mm2 = count($mm2);
$j_mm3 = count($mm3);
$total_mm = $j_mm1 + $j_mm2 + $j_mm3;
// MM

// Terima
$terima_rpl = query("SELECT * FROM terimaa WHERE jurusan = 'Ilmu Komputer' ");
$j_trpl = count($terima_rpl);
$terima_tkj = query("SELECT * FROM terimaa WHERE jurusan = 'Sistem Informasi' ");
$j_ttkj = count($terima_tkj);
$terima_mm = query("SELECT * FROM terimaa WHERE jurusan = 'Matematika' ");
$j_tmm = count($terima_mm);
// 

// Tolak
$tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' ");
$j_tolak = count($tolak);
// Tolak

// Terima
$terimaa = query("SELECT * FROM terimaa");
// Terima

?>