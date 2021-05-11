<?php

/******************************************
TP4 IQBAL ZAIN 1901423

ITU DESKRIPSI

-------------------------------------------------------------
Saya Muhammad Iqbal Zain mengerjakan TP4PBO2021 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan
kecurangan seperti yang telah di spesifikasikan.
Aamiin.

ITU KOMEN
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();
//$id, $tname, $tnim, $tp1, $tp2, $tp3, $tkelas
// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("skin/history.html");

// Menampilkan ke layar
$tpl->write();