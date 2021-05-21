<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");
// Membuat objek dari kelas data
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// //mengupdate data pada tabel
if(isset($_GET['id_done'])){
	$id_data = $_GET['id_done'];

	$otask->updateStatus(1, $id_data);
	header("Location: admin.php");
}

$otask->getProject();
$data = null;
// $no = 1;

while (list($id_project, $id_owner, $status, $end_date, $title, $location, $category, $date_project, $desc) = $otask->getResult()) {

	// Tampilan jika status pembayaran nya sudah bayar
    
    
        $data .= "<tr>
        <td style='text-align: center;'>" . $id_project . "</td>
        <td>" . $id_owner . "</td>
        <td>" . $status . "</td>
        <td>" . $title . "</td>
        <td>" . $location . "</td>
        <td>" . $category . "</td>
        <td>" . $date_project . "</td>
        <td>" . $desc . "</td>";
        if($status == 0){
            $data .= "<td align='center'><button class='btn btn-success'><a href='admin.php?id_done=" . $id_project . "' style='color: white; text-decoration: none;'>Done</a></button></td>
            </tr>";
	    }else{
            $data .= "<td align='center'><button class='btn btn-outline-success' disabled><a style='color: black; text-decoration: none;'>Done</a></button></td>";
        }
}




// //mengupdate data
// if(isset($_GET['id_edit'])){
// 	$id_edit = $_GET['id_edit'];

// 	$odata->updateData($id_edit);

// 	unset($_GET['id_edit']);
	
// 	header("Location: index.php");
// }


// //Menutup koneksi database
$otask->close();

//Membaca template skin.html
$tpl = new Template("skin/admin.html");

//Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

//Menampilkan ke layar
$tpl->write();