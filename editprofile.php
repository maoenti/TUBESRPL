<?php


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
$tpl = new Template("skin/editprofile.html");

// Menampilkan ke layar
$tpl->write();