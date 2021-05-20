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
	
	function getProject(){
		$query = "SELECT * FROM tb_project";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	function getProjectByID($id){
		$query = "SELECT * FROM tb_project WHERE id_project = $id";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function getUserByID($id){
		$query = "SELECT * FROM tb_user WHERE id = $id";
		// Mengeksekusi query
		return $this->execute($query);
	}
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
	
	function addProjectBaru($usernameOwner , $title, $location , $category, $date_project, $desc){
		$query = "SELECT id FROM tb_user WHERE username = '$usernameOwner'";
		$this->execute($query);
		$id_user = $this->getResult();
		// echo print_r($id_user) ;
		$x = $id_user["id"];
		
		$query = "INSERT INTO tb_project (id_owner , status, title, location, category, date_project , description) VALUES ('$x' , 0, '$title','$location', '$category', '$date_project', '$desc');";
		
		// // Mengeksekusi query
		$this->execute($query);
	}

	// function update_nilai($id,$par){
	// 	// $query = "UPDATE tb_nilai_tp SET tp1 = '60'   WHERE tb_nilai_tp.id = '$id';";
		
	// 	// Mengeksekusi query
	// 	$this->execute($query);
	// }

}



?>
