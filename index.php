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
session_start();
// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();
//$id, $tname, $tnim, $tp1, $tp2, $tp3, $tkelas
// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("skin/mainpage.html");
$profilDefault = "<div class='profile-container'>
<div class='btn-profile'>
    <a href='login.php'>Login</a>
</div>
<div class='btn-profile2'>
    <a href='signup.php'>Sign up</a>
</div>
</div>";

if(isset($_SESSION['username'])){
    
    $nama = $_SESSION['username'];
    $profilDefault = "<div class='btn-profile'>
    <a href='logout.php'>LogOut</a>
    </div>
    <p>Hello, '$nama'!</p>
    <div class='profile-container'>
        <a href='editprofile.php'><img src='img/header/rira.png'></a>
    </div>";
    
}
$tpl->replace("PROFIL", $profilDefault);
// Menampilkan ke layar
$tpl->write();