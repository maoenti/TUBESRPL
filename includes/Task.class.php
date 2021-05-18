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
	
	function addProjectBaru($usernameOwner , $title, $location , $category, $date_project, $desc){
		$sql = "SELECT * FROM tb_user WHERE username = ' $usernameOwner '";
		$retval = mysqli_query($this->getLink(),$sql);
		$id_user = mysqli_fetch_array($retval);
		echo print_r($retval) ;
		// echo "<script type='text/javascript'>alert('$id_user');</script>";
		// $query = "INSERT INTO tb_project (id_owner , status, title, location, category, date_project , description) VALUES ('$x' , 0, '$title','$location', '$category', '$date_project', '$desc');";
		
		// // Mengeksekusi query
		// $this->execute($query);
	}

	// function update_nilai($id,$par){
	// 	// $query = "UPDATE tb_nilai_tp SET tp1 = '60'   WHERE tb_nilai_tp.id = '$id';";
		
	// 	// Mengeksekusi query
	// 	$this->execute($query);
	// }

}



?>
