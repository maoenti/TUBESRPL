<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	// function getProject($code){
	// 	// Query mysql select data ke tb_to_do
	// 	$query = "SELECT * FROM tb_nilai_tp";

	// 	// Mengeksekusi query
	// 	return $this->execute($query);
	// }
	//ERROR BGSTTT--------------------------------------------------------
	function cekUsername($username){ 
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_user WHERE username = '$username'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function addUserBaru($email , $username, $password){
		$query = "INSERT INTO tb_user (email , username, password) VALUES ('$email', '$username', '$password');";
		
		// Mengeksekusi query
		$this->execute($query);
	}
	

	// function update_nilai($id,$par){
	// 	// $query = "UPDATE tb_nilai_tp SET tp1 = '60'   WHERE tb_nilai_tp.id = '$id';";
		
	// 	// Mengeksekusi query
	// 	$this->execute($query);
	// }

}



?>
